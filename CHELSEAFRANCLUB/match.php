<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Bienvenue sur le site du Chelsea Fran Club, une communauté passionnée de supporters de Chelsea FC.">
        <meta name="keywords" content="Chelsea, FC, football, supporters, communauté">
        <meta name="author" content="Chelsea Fran Club">
        <title> ACCUEIL - Chelsea Fran Club</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="style/style.css">
        
    </head>
<body>
    <header>
        <div class="logo">
            <a href="accueil.html">
                <img src="../images CLUB/Logos/LOGO_DU_SITE-removebg-preview - Copie.png" alt="Logo Chelsea Fran Club">
            </a>
        </div>
        <h1>Chelsea Fran Club</h1>    
        <div class="auth-buttons">
            <a href="index.php">S'inscrire/ Se connecter</a>
          
        </div>
    </header>
    
    <nav>
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
            <li><a href="compte.html">Compte</a></li>
        </ul>
    </nav>
    <main>
        <div id="not-home">
            <section id="prochain-match">
                
            </section>
        </div>
    
        <section class="discord-info">
            <h2><i class="fab fa-discord"></i> Rejoignez notre Forum Discord</h2>
            <p>Connectez-vous pour discuter avec d'autres supporters et rester à jour sur les dernières nouvelles.</p>
            <ul>
                <li>Discussions en direct avec l'équipe</li>
                <li>Mises à jour instantanées sur les nouvelles</li>
            </ul>
            <div id="discord-link-container">
                <?php if (isset($_SESSION['user'])): ?>
                <p>Rejoignez notre serveur Discord :</p>
            <?php endif; ?>
            </div>
        </section>
 
        <section class="live-info">
            <h2>Suivez le Match en Direct</h2>
            <p>Pour suivre le match en direct, visitez <a href="https://www.flashscore.fr/equipe/chelsea/4fGZN2oK/" target="_blank" rel="noopener noreferrer">Flashscore.fr</a>.</p>
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

    <script>
     const calendrier = [
    // Matchs passés avec résultats
    {
        "MatchNumber": 1,
        "RoundNumber": 1,
        "DateUtc": "2024-08-18 15:30:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Man City",
        "HomeTeamScore": 0,
        "AwayTeamScore": 2
    },
    {
        "MatchNumber": 2,
        "RoundNumber": 2,
        "DateUtc": "2024-08-25 13:00:00Z",
        "Location": "Molineux Stadium",
        "HomeTeam": "Wolves",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": 2,
        "AwayTeamScore": 6
    },
    {
        "MatchNumber": 3,
        "RoundNumber": 3,
        "DateUtc": "2024-09-01 12:30:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Crystal Palace",
        "HomeTeamScore": 1,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 4,
        "RoundNumber": 4,
        "DateUtc": "2024-09-14 19:00:00Z",
        "Location": "Vitality Stadium",
        "HomeTeam": "Bournemouth",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": 2,
        "AwayTeamScore": 2
    },
    {
        "MatchNumber": 5,
        "RoundNumber": 5,
        "DateUtc": "2024-09-21 11:30:00Z",
        "Location": "London Stadium",
        "HomeTeam": "West Ham",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": 1,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 6,
        "RoundNumber": 6,
        "DateUtc": "2024-09-28 14:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Brighton",
        "HomeTeamScore": 4,
        "AwayTeamScore": 2
    },
    {
        "MatchNumber": 7,
        "RoundNumber": 7,
        "DateUtc": "2024-10-05 14:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Nott'm Forest",
        "HomeTeamScore": 1,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 8,
        "RoundNumber": 8,
        "DateUtc": "2024-10-19 14:00:00Z",
        "Location": "Anfield",
        "HomeTeam": "Liverpool",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": 2,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 9,
        "RoundNumber": 9,
        "DateUtc": "2024-10-26 14:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Newcastle",
        "HomeTeamScore": 2,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 10,
        "RoundNumber": 10,
        "DateUtc": "2024-11-02 15:00:00Z",
        "Location": "Old Trafford",
        "HomeTeam": "Man Utd",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": 1,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 11,
        "RoundNumber": 11,
        "DateUtc": "2024-11-09 15:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Arsenal",
        "HomeTeamScore": 1,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 12,
        "RoundNumber": 12,
        "DateUtc": "2024-11-23 15:00:00Z",
        "Location": "King Power Stadium",
        "HomeTeam": "Leicester",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": 1,
        "AwayTeamScore": 2
    },
    {
        "MatchNumber": 13,
        "RoundNumber": 13,
        "DateUtc": "2024-11-30 15:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Aston Villa",
        "HomeTeamScore": 3,
        "AwayTeamScore": 0
    },
    {
        "MatchNumber": 14,
        "RoundNumber": 14,
        "DateUtc": "2024-12-04 19:45:00Z",
        "Location": "St. Mary's Stadium",
        "HomeTeam": "Southampton",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": 1,
        "AwayTeamScore": 5
    },
    {
        "MatchNumber": 15,
        "RoundNumber": 15,
        "DateUtc": "2024-12-07 15:00:00Z",
        "Location": "Tottenham Hotspur Stadium",
        "HomeTeam": "Spurs",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": 3,
        "AwayTeamScore": 4
    },
    {
        "MatchNumber": 16,
        "RoundNumber": 16,
        "DateUtc": "2024-12-14 15:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Brentford",
        "HomeTeamScore": 2,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 17,
        "RoundNumber": 17,
        "DateUtc": "2024-12-21 15:00:00Z",
        "Location": "Goodison Park",
        "HomeTeam": "Everton",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": 0,
        "AwayTeamScore": 0
    },
    {
        "MatchNumber": 18,
        "RoundNumber": 18,
        "DateUtc": "2024-12-26 15:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Fulham",
        "HomeTeamScore": 1,
        "AwayTeamScore": 2
    },
    {
        "MatchNumber": 19,
        "RoundNumber": 19,
        "DateUtc": "2025-01-01 15:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Ipswich",
        "HomeTeamScore": 0,
        "AwayTeamScore": 2
    },
    
    // Matchs à venir
    {
        "MatchNumber": 20,
        "RoundNumber": 20,
        "DateUtc": "2025-01-04 15:00:00Z",
        "Location": "Selhurst Park",
        "HomeTeam": "Crystal Palace",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": 1,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 21,
        "RoundNumber": 21,
        "DateUtc": "2025-01-15 19:45:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Bournemouth",
        "HomeTeamScore": 2,
        "AwayTeamScore": 2
    },
    {
        "MatchNumber": 22,
        "RoundNumber": 22,
        "DateUtc": "2025-01-18 15:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Wolves",
        "HomeTeamScore": 3,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 23,
        "RoundNumber": 23,
        "DateUtc": "2025-01-25 15:00:00Z",
        "Location": "Etihad Stadium",
        "HomeTeam": "Man City",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": 3,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 24,
        "RoundNumber": 24,
        "DateUtc": "2025-02-01 15:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "West Ham",
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 25,
        "RoundNumber": 25,
        "DateUtc": "2025-02-15 15:00:00Z",
        "Location": "American Express Stadium",
        "HomeTeam": "Brighton",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 26,
        "RoundNumber": 26,
        "DateUtc": "2025-02-22 15:00:00Z",
        "Location": "Villa Park",
        "HomeTeam": "Aston Villa",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 27,
        "RoundNumber": 27,
        "DateUtc": "2025-02-26 19:45:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Southampton",
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 28,
        "RoundNumber": 28,
        "DateUtc": "2025-03-08 15:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeamScore": null,
        "HomeTeamScore": null
    },
    {
        "MatchNumber": 29,
        "RoundNumber": 29,
        "DateUtc": "2025-03-15 15:00:00Z",
        "Location": "Emirates Stadium",
        "HomeTeam": "Arsenal",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 30,
        "RoundNumber": 30,
        "DateUtc": "2025-04-02 18:45:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Spurs",
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 31,
        "RoundNumber": 31,
        "DateUtc": "2025-04-05 14:00:00Z",
        "Location": "Gtech Community Stadium",
        "HomeTeam": "Brentford",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 32,
        "RoundNumber": 32,
        "DateUtc": "2025-04-12 14:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Ipswich",
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 33,
        "RoundNumber": 33,
        "DateUtc": "2025-04-19 14:00:00Z",
        "Location": "Craven Cottage",
        "HomeTeam": "Fulham",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 34,
        "RoundNumber": 34,
        "DateUtc": "2025-04-26 14:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Everton",
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 35,
        "RoundNumber": 35,
        "DateUtc": "2025-05-03 14:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Liverpool",
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 36,
        "RoundNumber": 36,
        "DateUtc": "2025-05-10 14:00:00Z",
        "Location": "St. James' Park",
        "HomeTeam": "Newcastle",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 37,
        "RoundNumber": 37,
        "DateUtc": "2025-05-18 14:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Man Utd",
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 38,
        "RoundNumber": 38,
        "DateUtc": "2025-05-25 15:00:00Z",
        "Location": "The City Ground",
        "HomeTeam": "Nott'm Forest",
        "AwayTeam": "Chelsea",
        "HomeTeamScore": null,
        "AwayTeamScore": null
    }
];



    const isLoggedIn = <?php echo json_encode(isset($_SESSION['user'])); ?>; // Passer la valeur de connexion à JavaScript
    console.log(isLoggedIn);
    const discordLinkContainer = document.getElementById('discord-link-container');

    if (isLoggedIn) {
        // Si l'utilisateur est connecté, afficher le lien pour rejoindre Discord
        const discordLink = document.createElement('a');
        discordLink.href = "https://discord.gg/gDkgb97C"; // Remplacez par votre lien Discord
        discordLink.innerText = "Rejoindre le Discord de Chelsea Fran Club";
        discordLink.className = 'btn-discord'; // Ajouter une classe pour le style
        discordLinkContainer.appendChild(discordLink);
    } else {
        // Créer un conteneur pour le texte
        const textContainer = document.createElement('span');

        // Créer le lien pour "Inscrivez-vous"
        const signupLink = document.createElement('a');
        signupLink.href = "index.php"; // Remplacez par votre lien d'inscription
        signupLink.innerText = "Inscrivez-vous";
        signupLink.className = 'btn-discord'; // Ajouter une classe pour le style

        // Créer le texte "ou"
        const orText = document.createElement('span');
        orText.innerText = " ou ";

        // Créer le lien pour "connectez-vous"
        const loginLink = document.createElement('a');
        loginLink.href = "index.php"; // Remplacez par votre lien de connexion
        loginLink.innerText = "connectez-vous";
        loginLink.className = 'btn-discord'; // Ajouter une classe pour le style

        // Ajouter les éléments au conteneur de texte
        textContainer.appendChild(signupLink);
        textContainer.appendChild(orText);
        textContainer.appendChild(loginLink);

        // Ajouter le conteneur de texte au conteneur principal
        discordLinkContainer.appendChild(textContainer);
    }

    function trouverProchainMatch(calendrier) {
        const maintenant = new Date();
        return calendrier.find(match => new Date(match.DateUtc) > maintenant);
    }

    function afficherProchainMatch() {
        const prochainMatch = trouverProchainMatch(calendrier);
        const prochainMatchDiv = document.getElementById("prochain-match");
        prochainMatchDiv.innerText = ""; // Vider le contenu

        if (prochainMatch) {
            const card = document.createElement("div");
            card.className = "card prochain-match";
            const cardBody = document.createElement("div");
            cardBody.className = "card-body";
            
            const title = document.createElement("p");
            title.className = "card-title";
            title.innerText = "Prochain Match";
            
            const matchInfo = document.createElement("p");
            matchInfo.innerText = `${prochainMatch.HomeTeam} vs ${prochainMatch.AwayTeam}`;
            
            const location = document.createElement("p");
            location.innerText = `Lieu: ${prochainMatch.Location}`;
            
            const date = document.createElement("p");
            date.innerText = `Date: ${new Date(prochainMatch.DateUtc).toLocaleString('fr-FR', { timeZone: 'UTC' })}`;
            
            // Ajouter les éléments au corps de la carte
            cardBody.appendChild(title);
            cardBody.appendChild(matchInfo);
            cardBody.appendChild(location);
            cardBody.appendChild(date);
            
            // Ajouter le corps de la carte à la carte
            card.appendChild(cardBody);
            
            // Ajouter la carte au conteneur du prochain match
            prochainMatchDiv.appendChild(card);
        } else {
            prochainMatchDiv.innerText = "Aucun match à venir";
        }
    }

    // Appeler la fonction pour afficher le prochain match
    afficherProchainMatch();

    </script>
</body>
</html>