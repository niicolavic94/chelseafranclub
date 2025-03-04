<?php
// models/modelUser .php
// Ce fichier contient la classe User qui gère les opérations liées aux utilisateurs.

class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function register($pseudo, $mdp, $email) {
        try {
            $req = $this->db->prepare('INSERT INTO users(pseudo, mdp, email) VALUES (?, ?, ?)');
            return $req->execute(array($pseudo, password_hash($mdp, PASSWORD_DEFAULT), $email));
        } catch (Exception $e) {
            // Loggez l'erreur et/ou envoyez une réponse appropriée
            return false;
        }
    }

    public function findUser($pseudo, $email) {
        $checkUser = $this->db->prepare('SELECT id, pseudo, email FROM users WHERE pseudo = ? OR email = ?');
        $checkUser->execute(array($pseudo, $email));
        return $checkUser->fetch();
    }
    

    public function login($pseudo, $mdp) {
        $requete = $this->db->prepare('SELECT id, pseudo, mdp FROM users WHERE pseudo = ?');
        $requete->execute(array($pseudo));
        $user = $requete->fetch();
        if ($user && password_verify($mdp, $user['mdp'])) {
            return $user; // Retourner uniquement les informations nécessaires
        }
        return null;
    }
    
}
?>