<?php
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=chelsea_club', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

$message = '';

if (isset($_POST['reset'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['email'])) {
        $pseudo = htmlspecialchars(trim($_POST['pseudo']));
        $email = htmlspecialchars(trim($_POST['email']));

        // Vérification de l'utilisateur
        $checkUser   = $bdd->prepare('SELECT email FROM users WHERE pseudo = ? AND email = ?');
        $checkUser ->execute(array($pseudo, $email));
        
        if ($checkUser ->rowCount() > 0) {
            $user = $checkUser ->fetch();
            $email = $user['email'];

            // Générer le token
            $token = bin2hex(random_bytes(50));
            $expiry = date("Y-m-d H:i:s", strtotime('+1 hour'));

            // Stocker le token et l'expiration dans la base de données
            $req = $bdd->prepare('INSERT INTO password_resets(pseudo, token, expiry) VALUES (?, ?, ?)');
            $req->execute(array($pseudo, $token, $expiry));

            // Envoyer l'email avec le lien de réinitialisation
            $resetLink = "http://yourdomain.com/reset_password.php?token=" . $token;
            $subject = "Réinitialisation de votre mot de passe";
            $body = "Cliquez sur ce lien pour réinitialiser votre mot de passe: " . $resetLink;

            // Utiliser mail() pour envoyer l'email
            if (mail($email, $subject, $body)) {
                $message = "Un lien de réinitialisation a été envoyé à votre adresse e-mail.";
            } else {
                $message = "Erreur lors de l'envoi de l'e-mail. Veuillez réessayer.";
            }
        } else {
            $message = "Aucun utilisateur trouvé avec ce pseudo et cet email.";
        }
    } else {
        $message = 'Veuillez entrer votre pseudo et votre adresse e-mail.';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réinitialisation de Mot de Passe</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
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
        <?php if (!empty($message)) { echo '<p class="message">' . $message . '</p>'; } ?> <!-- Message d'erreur stylisé -->
    </div>
</div>
</body>
</html>