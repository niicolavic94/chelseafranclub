<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mot de Passe Oublié</title>
    <link rel="stylesheet" href="style/style4.css">
</head>
<body>
    <div class="form-wrapper">
        <h2>Mot de Passe Oublié</h2>
        <form action="" method="POST">
            <input type="text" name="pseudo" placeholder="Pseudo" required>
            <input type="email" name="email" placeholder="Email" required>
            <button type="submit" name="reset">Réinitialiser</button>
            <p><a href="index.php">Retour à la connexion</a></p>
        </form>
        <?php if (!empty($message)) { echo '<p class="message">' . $message . '</p>'; } ?>
    </div>
</body>
</html>