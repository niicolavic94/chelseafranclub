<?php
// config/database.php
// Ce fichier contient la fonction pour établir une connexion à la base de données.

function getDatabaseConnection() {
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=chelsea_club', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    } catch (PDOException $e) {
        error_log('Erreur de connexion : ' . $e->getMessage()); // Log de l'erreur
        die('Erreur : Impossible d\'établir une connexion à la base de données.');
    }
}
?>