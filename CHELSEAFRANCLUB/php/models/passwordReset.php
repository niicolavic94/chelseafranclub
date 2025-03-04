<?php
// models/PasswordReset.php
// Ce fichier contient la classe PasswordReset qui gère les opérations liées à la réinitialisation des mots de passe.

class PasswordReset {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function createResetToken($pseudo, $token, $expiry) {
        $req = $this->db->prepare('INSERT INTO password_resets(pseudo, token, expiry) VALUES (?, ?, ?)');
        return $req->execute(array($pseudo, $token, $expiry));
    }

    public function findUserByPseudoAndEmail($pseudo, $email) {
        $checkUser  = $this->db->prepare('SELECT email FROM users WHERE pseudo = ? AND email = ?');
        $checkUser ->execute(array($pseudo, $email));
        return $checkUser ->fetch();
    }
}
?>