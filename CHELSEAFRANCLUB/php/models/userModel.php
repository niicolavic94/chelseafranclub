<?php
// models/UserModel.php

class UserModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function registerUser (string $pseudo, string $mdp, string $email): bool {
        try {
            $stmt = $this->db->prepare('INSERT INTO users (pseudo, mdp, email) VALUES (?, ?, ?)');
            return $stmt->execute([$pseudo, password_hash($mdp, PASSWORD_DEFAULT), $email]);
        } catch (PDOException $e) {
            // Log the error instead of displaying it
            error_log('Erreur lors de l\'inscription : ' . $e->getMessage());
            return false;
        }
    }
    public function verifyUserPassword(string $pseudo, string $password): bool {
        $user = $this->findUserByPseudo($pseudo);
        if ($user) {
            return password_verify($password, $user['mdp']);
        }
        return false; // Utilisateur non trouvé
    }

    public function findUserByPseudo(string $pseudo): ?array {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE pseudo = ?');
        $stmt->execute([$pseudo]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function checkUserExists(string $pseudo, string $email): array {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE pseudo = ? OR email = ?');
        $stmt->execute([$pseudo, $email]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function storeResetToken(string $pseudo, string $token): bool {
        $expiry = date('Y-m-d H:i:s', strtotime('+1 hour')); // Le token expire dans 1 heure
        $stmt = $this->db->prepare("INSERT INTO password_resets (pseudo, token, expiry) VALUES (?, ?, ?)");
        return $stmt->execute([$pseudo, $token, $expiry]);
    }

    public function verifyResetToken(string $token): ?array {
        $stmt = $this->db->prepare("SELECT * FROM password_resets WHERE token = ? AND expiry > NOW()");
        $stmt->execute([$token]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteResetToken(string $token): bool {
        $stmt = $this->db->prepare("DELETE FROM password_resets WHERE token = ?");
        return $stmt->execute([$token]);
    }

    public function updatePassword(string $pseudo, string $newPassword): bool {
        $stmt = $this->db->prepare("UPDATE users SET mdp = ? WHERE pseudo = ?");
        return $stmt->execute([password_hash($newPassword, PASSWORD_DEFAULT), $pseudo]);
    }

  
  
}
?>