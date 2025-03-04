<?php
session_start();
session_destroy(); // Détruire la session

// Stocker un message dans la session
session_start();
$_SESSION['message'] = "Vous avez été déconnecté avec succès.";

// Rediriger vers la page de connexion
header("Location: index.php");
exit();
?>