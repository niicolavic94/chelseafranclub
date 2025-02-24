<!-- header.php -->
<header>
    <div class="logo">
        <a href="accueil.html">
            <img src="../images CLUB/Logos/LOGO_DU_SITE-removebg-preview - Copie.png" alt="Logo Chelsea Fran Club">
        </a>
    </div>
    <h1>Chelsea Fran Club</h1>    
    <div class="auth-buttons">
        <?php if (isset($_SESSION['user'])): ?>
            <span>Bienvenue, <?php echo htmlspecialchars($_SESSION['user']); ?> !</span>
            <a href="logout.php">Se déconnecter</a>
        <?php else: ?>
            <a href="index.php">S'inscrire/ Se connecter</a>
        <?php endif; ?>
    </div>
</header>