<?php
session_start();

// Vérifiez si l'utilisateur est connecté
$isLoggedIn = isset($_SESSION['pseudo']);
$pseudo = $isLoggedIn ? $_SESSION['pseudo'] : '';
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
    <link rel="stylesheet" href="style/style2.css">
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
        <a href="logout.php">Déconnexion</a> <!-- Assurez-vous que le chemin est correct -->
    <?php else: ?>
        <a href="php/index.php">S'inscrire/ Se connecter</a>
    <?php endif; ?>
</div>
    </header>
    
    <nav>
        <button class="menu-toggle" aria-label="Menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </button>
        <ul>
            <li><a href="accueilv2.html">Accueil</a></li>
            <li><a href="actu2.html">Actualités</a></li>
            <li><a href="match.html">Match</a></li>
            <li>
                <a href="#">Club</a>
                <ul class="dropdown">
                    <li><a href="histoire.html">Notre Histoire</a></li>
                    <li><a href="statistiques.html">Statistiques</a></li>
                    <li><a href="effectif.html">Effectif</a></li>
                    <li><a href="classement.html">Saison 24/25</a></li>
                </ul>
            </li>
            <?php if ($isLoggedIn): ?>
                <li><a href="profile.php">Mon Profil</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    
    <main class="accueil">
        <section>
            <?php if ($isLoggedIn): ?>
                <h2>Bienvenue sur le site du Chelsea Fran Club, <?php echo htmlspecialchars($pseudo); ?>!</h2>
            <?php else: ?>
                <h2>Bienvenue sur le site du Chelsea Fran Club</h2>
            <?php endif; ?>
            <div class="intro">
                <p>Le Chelsea Fran Club est une communauté passionnée de supporters de Chelsea FC.</p>
                <p>Partageons notre amour du football, discutons des matchs, et soutenons notre équipe favorite.</p>
                <p>Suivons toute l'actualité du club : infos sur le club, match et mercato.</p>
                <p>Inscris-toi et tu auras accès à un discord privé pour échanger avec les fans.</p>
            </div>

            <div class="row">
                <div class="col-12 col-md-6">
                    <h2>Actualités</h2>
                    <div id="newsCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
                        <div class="carousel-inner">
                            <div class="carousel-item active" id="dernier-match"></div>
                            <div class="carousel-item" id="prochain-match"></div>
                            <div class="carousel-item" id="trois-prochains-matchs"></div>
                        </div>
                        <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précédent</span>
                        </a>
                        <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                    </div>
                </div>
            
                <div class="col-12 col-md-6">
                    <h2>Dernières Nouvelles</h2>
                    <div id="latestNewsCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card latest-news-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Nouvelle 1</h5>
                                        <p class="card-text">Renato Veiga à la Juve en prêt !</p>
                                        <ul>
                                            <li>Ayant peu de temps de jeu, et une forte concurrence,</li> 
                                            <li>il est prêté à la Juventus de Turin jusqu'à la fin de la saison.</li>
                                            <li>Aucune option d'achat, c'est un prêt fixe.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card latest-news-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Nouvelle 2</h5>
                                        <p class="card-text">Le club a remporté le prix du meilleur club de l'année !</p>
                                        <ul>
                                            <li>Félicitations à toute l'équipe.</li>
                                            <li>Merci à nos supporters !</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card latest-news-card">
                                    <div class="card-body">
                                        <h5 class="card-title">Nouvelle 3</h5>
                                        <p class="card-text">Le coach a été élu entraîneur du mois !</p>
                                        <ul>
                                            <li>Un grand honneur pour notre entraîneur.</li>
                                            <li>Restez à l'écoute pour plus d'actualités.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#latestNewsCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Précédent</span>
                        </a>
                        <a class="carousel-control-next" href="#latestNewsCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Suivant</span>
                        </a>
                    </div>
                </div>
            </div>
            <h2>Classement de Chelsea</h2>
            <table id="classement-chelsea-table" class="table">
                <thead>
                    <tr>
                        <th>Position</th>
                        <th>Logo</th>
                        <th>Équipe</th>
                        <th>Points</th>
                    </tr>
                </thead>
 <tbody>
                    <!-- Les données seront insérées ici -->
                </tbody>
            </table>

            <h2>Galerie</h2>
            <div id="galleryCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-4">
                                <img src="images CLUB/Logos/BRIDGE.jpg" class="d-block w-100 gallery-img" alt="Stade de Stamford Bridge">
                            </div>
                            <div class="col-4">
                                <img src="images CLUB/Logos/drooo.jpg" class="d-block w-100 gallery-img" alt="Joueur de Chelsea en action">
                            </div>
                            <div class="col-4">
                                <img src="images CLUB/Logos/haz.jpg" class="d-block w-100 gallery-img" alt="Eden Hazard célébrant un but">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-4">
                                <img src="images CLUB/Logos/cmshield.jpg" class="d-block w-100 gallery-img" alt="Didier Drogba en action">
                            </div>
                            <div class="col-4">
                                <img src="images CLUB/Logos/EXT.jpg" class="d-block w-100 gallery-img" alt="Nouveau joueur de Chelsea">
                            </div>
                            <div class="col-4">
                                <img src="images CLUB/Logos/lam.jpg" class="d-block w-100 gallery-img" alt="Joueur de Chelsea avec le ballon">
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#galleryCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#galleryCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>

            <div class="useful-links">
                <h2>Liens utiles</h2>
                <ul class="list-unstyled d-flex justify-content-center">
                    <li class="mx-3">
                        <a href="https://www.chelseafc.com" target="_blank" rel="noopener noreferrer">
                            <i class="fas fa-home"></i> Site officiel de Chelsea FC
                        </a>
                    </li>
                    <li class="mx-3">
                        <a href="https://www.football365.com" target="_blank" rel="noopener noreferrer">
                            <i class="fas fa-futbol"></i> Football 365
                        </a>
                    </li>
                    <li class="mx-3">
                        <a href="https://www.flashcores.com" target="_blank" rel="noopener noreferrer">
                            <i class="fas fa-trophy"></i> Flashcores
                        </a>
                    </li>
                    <li class="mx-3">
                        <a href="https://www.footmercato.net" target="_blank" rel="noopener noreferrer">
                            <i class="fas fa-futbol"></i> Footmercato
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </main>
    
    <footer>
        <div class="footer-links">
            <a href="mentionslegales.html">Mentions légales</a>
            <a href="aproposde.html">A propos de</a>
            <a href="faq.html">Foire à questions</a>
            <a href="motdepasseoublie.html">Mot de passe oublié ?</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/chelsea.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.querySelector('.menu-toggle');
        const nav = document.querySelector('nav');

        menuToggle.addEventListener('click', function() {
            nav.classList.toggle('active'); // Ajoute ou supprime la classe 'active'
        });
      });
    </script>
</body>
</html>