<?php
session_start(); // Assurez-vous que la session est démarrée

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user'])) {
    // L'utilisateur n'est pas connecté, redirigez vers la page de connexion
    header('Location: index.php');
    exit();
}

// Le reste de votre code pour le tableau de bord
// Par exemple, afficher des informations utilisateur, etc.
?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../PHPCHELSEA/style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">

  
</head>


<header>
    <div class="left">
        <a href="accueil.html"><img id="accueil" src="../images CLUB/Logos/LOGO_DU_SITE-removebg-preview - Copie.png" alt="logo Chelsea Fran Club"></a>
    </div>
    <div class="center">Chelsea Fran Club</div>
    <div class="right">
        <?php if (!isset($_SESSION['user'])) : ?>
            <a href="index.php" class="styled-button">Se connecter</a>
            <a href="index.php" class="styled-button">S'inscrire</a>
        <?php else : ?>
            <a href="dashboard.php" class="styled-button">Mon compte</a>
            <a href="logout.php" class="styled-button">Se déconnecter</a>
        <?php endif; ?>
    </div>
</header>
<nav class="nav">
<ul class="menu">
    <li><a href="../HTML/accueil.html"><button>Accueil</button></a></li>
    <li><a href="../HTML/actu2.html"><button>Actualités</button></a></li>
    <li><a href="../HTML/forum.html"><button>Forum</button></a></li>
    <li><a href="../HTML/club.html"><button>Club</button></a></li>
    <li><a href="../HTML/match.html"><button>Match</button></a></li>
    <li><a href="../HTML/rsociaux.html"><button>Réseaux sociaux</button></a></li>
    <li><a href="../HTML/compte.html"><button>Compte</button></a></li>
    <li><a href="../HTML/aproposde.html"><button>A propos</button></a></li>
        </ul>
    </nav>

    <body>
    <h1>Bienvenue, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h1>

    <h4> Page mon compte en cours d'élaboration...</h4>
  
    <!-- Ajoutez d'autres fonctionnalités de votre tableau de bord ici -->
</body>
    



<footer>
        <!-- ML et FAQ -->
        <div class="left">
            <ul><a href="mentionslegales.html" target="_blank">Mentions légales</a></ul>
            <ul><a href="faq.html" target="_blank">Foire à questions</a></ul>
        </div>
        <!-- Réseaux sociaux -->
        <div class="right">
            <ul>
                <li><a href="https://www.instagram.com/chelseafran31" target="_blank" rel="noopener noreferrer">
                    <img src="../images CLUB/Logos/réseaux/vecteezy_instagram-logo-png-instagram-icon-transparent_18930415.png" alt="Instagram">
                </a></li>
                <li><a href="https://x.com/chelsea_fran" target="_blank" rel="noopener noreferrer">
                    <img src="../images CLUB/Logos/réseaux/vecteezy_twitter-new-logo-twitter-icons-new-twitter-logo-x-2023-x_31737215.png" alt="Twitter">
                </a></li>
                <li><a href="https://discord.com/invite/1270438808197791844" target="_blank" rel="noopener noreferrer">
                    <img src="../images CLUB/Logos/réseaux/vecteezy_discord-logo-png-discord-icon-transparent-png_18930718.png" alt="Discord">
                </a></li>
            </ul>
        </div>
</footer>
<style>
    p{
        color:white;
    }
    #prochain-match{
        color:gold;
    }
</style>
<!-- JS match.js pour ma fonction "prochain match" -->
<script src="../js/match.js"></script>

</html>
