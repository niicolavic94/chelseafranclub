<?php
// reset_password.php
require 'config/config.php';
require 'models/UserModel.php';

session_start();

$userModel = new UserModel($bdd);
$message = '';

if (isset($_GET['token'])) {
    $token = htmlspecialchars(trim($_GET['token']));
    $resetRequest = $userModel->verifyResetToken($token);

    if ($resetRequest) {
        if (isset($_POST['reset_password'])) {
            $newPassword = htmlspecialchars(trim($_POST['new_password']));
            $confirmPassword = htmlspecialchars(trim($_POST['confirm_password']));

            // Validation de la force du mot de passe
            if (strlen($newPassword) < 8) {
                $message = "Le mot de passe doit contenir au moins 8 caractères.";
            } elseif ($newPassword !== $confirmPassword) {
                $message = "Les mots de passe ne correspondent pas.";
            } else {
                // Mettre à jour le mot de passe de l'utilisateur
                if ($userModel->updatePassword($resetRequest['pseudo'], password_hash($newPassword, PASSWORD_DEFAULT))) {
                    $message = "Votre mot de passe a été réinitialisé avec succès.";
                    // Supprimer le token après utilisation
                    $userModel->deleteResetToken($token);
                    // Redirection après succès
                    header("Location: login.php"); // Rediriger vers la page de connexion
                    exit;
                } else {
                    $message = "Erreur lors de la mise à jour du mot de passe.";
                }
            }
        }
    } else {
        $message = "Le token est invalide ou a expiré.";
    }
} else {
    $message = "Aucun token fourni.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation du Mot de Passe</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <h2>Réinitialisation du Mot de Passe</h2>
    <form action="" method="POST">
        <input type="password" name="new_password" placeholder="Nouveau mot de passe" required>
        <input type="password" name="confirm_password" placeholder="Confirmer le mot de passe" required>
        <input type="submit" name="reset_password" value="Réinitialiser le mot de passe">
    </form>
    <?php if (!empty($message)) { echo '<p class="error">' . $message . '</p>'; } ?>
</body>
</html>