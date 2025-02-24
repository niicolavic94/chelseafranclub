<?php
session_start(); // Démarrer la session

// Détruire toutes les variables de session
$_SESSION = array(); // Réinitialiser les variables de session

// Détruire la session
session_destroy(); // Détruire la session

// Rediriger l'utilisateur vers la page de connexion ou la page d'accueil
header('Location: ../accueilv2.php'); // Remplacez par la page de votre choix
exit(); // Terminer le script
?>