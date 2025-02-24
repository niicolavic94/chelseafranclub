<?php
session_start();

// Initialiser le message
$message = '';

// Vérifiez si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['reset'])) {
    $pseudo = htmlspecialchars(trim($_POST['pseudo']));
    $email = htmlspecialchars(trim($_POST['email']));

    // Ici, vous devez ajouter la logique pour vérifier si le pseudo et l'email existent dans votre base de données
    // Si oui, envoyez un email avec un lien de réinitialisation de mot de passe
    // Sinon, définissez un message d'erreur

    // Exemple de message (à remplacer par votre logique)
    $message = "Un email de réinitialisation a été envoyé à $email.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation de Mot de Passe</title>
    <link rel="stylesheet" type="text/css" href="style/style3.css">
</head>
<body>
<div class="form-wrapper">
    <div class="form-container" id="forgotPasswordForm">
        <h2>Réinitialisation</h2>
        <form action="" method="POST">
            <input type="text" name="pseudo" placeholder="Pseudo" required> 
            <input type="email" name="email" placeholder="Email" required> <!-- Champ email pour la réinitialisation -->
            <button type="submit" name="reset">Réinitialiser</button> 
            <p><a href="index.php">Retour à la connexion</a></p> <!-- Lien pour retourner à la page de connexion -->
        </form>
        <?php if (!empty($message)) { echo '<p class="message">' . htmlspecialchars($message) . '</p>'; } ?> <!-- Message d'erreur stylisé -->
    </div>
</div>
</body>
</html>