<?php
// config/config.php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=chelsea_club', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion réussie à la base de données."; // Enlevez cette ligne en production
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}
?>