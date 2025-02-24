<?php
session_start();

// Vérifiez si l'utilisateur est connecté
$isLoggedIn = isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] === true;
$pseudo = isset($_SESSION['pseudo']) ? $_SESSION['pseudo'] : 'Invité'; // Remplacez par la méthode appropriée pour obtenir le pseudo
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur le site du Chelsea Fran Club, une communauté passionnée de supporters de Chelsea FC.">
    <meta name="keywords" content="Chelsea, FC, football, supporters, communauté">
    <meta name="author" content="Chelsea Fran Club">
    <title>ACCUEIL - Chelsea Fran Club</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style/style3.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="accueilv2.html">
                <img src="../images CLUB/Logos/LOGO_DU_SITE-removebg-preview - Copie.png" alt="Logo Chelsea Fran Club">
            </a>
        </div>
        <h1>Chelsea Fran Club</h1>    
        <div class="auth-buttons">
            <?php if ($isLoggedIn): ?>
                <span>Bienvenue, <?php echo htmlspecialchars($pseudo); ?>!</span>
                <a href="logout.php">Déconnexion</a> <!-- Redirigez vers un script de déconnexion -->
            <?php else: ?>
                <a href="inscription.html">S'inscrire/ Se connecter</a>
            <?php endif; ?>
        </div>
    </header>

    <main>
        <!-- Contenu principal de la page -->
    </main>

    <footer>
        <p>&copy; 2023 Chelsea Fran Club. Tous droits réservés.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>