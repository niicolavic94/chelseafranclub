const calendrier = [
    // Résultats des matchs précédents
    {
        "MatchNumber": 9,
        "RoundNumber": 1,
        "DateUtc": "2024-08-18 15:30:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Man City",
        "Group": null,
        "HomeTeamScore": 0,
        "AwayTeamScore": 2
    },
    {
        "MatchNumber": 20,
        "RoundNumber": 2,
        "DateUtc": "2024-08-25 13:00:00Z",
        "Location": "Molineux Stadium",
        "HomeTeam": "Wolves",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": 2,
        "AwayTeamScore": 6
    },
    {
        "MatchNumber": 23,
        "RoundNumber": 3,
        "DateUtc": "2024-09-01 12:30:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Crystal Palace",
        "Group": null,
        "HomeTeamScore": 1,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 32,
        "RoundNumber": 4,
        "DateUtc": "2024-09-14 19:00:00Z",
        "Location": "Vitality Stadium",
        "HomeTeam": "Bournemouth",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": 0,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 50,
        "RoundNumber": 5,
        "DateUtc": "2024-09-21 11:30:00Z",
        "Location": "London Stadium",
        "HomeTeam": "West Ham",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": 0,
        "AwayTeamScore": 3
    },
    {
        "MatchNumber": 54,
        "RoundNumber": 6,
        "DateUtc": "2024-09-28 14:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Brighton",
        "Group": null,
        "HomeTeamScore": 4,
        "AwayTeamScore": 2
    },
    {
        "MatchNumber": 65,
        "RoundNumber": 7,
        "DateUtc": "2024-10-05 14:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Nott'm Forest",
        "Group": null,
        "HomeTeamScore": 1,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 74,
        "RoundNumber": 8,
        "DateUtc": "2024-10-19 14:00:00Z",
        "Location": "Anfield",
        "HomeTeam": "Liverpool",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": 2,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 85,
        "RoundNumber": 9,
        "DateUtc": "2024-10-26 14:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Newcastle",
        "Group": null,
        "HomeTeamScore": 2,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 95,
        "RoundNumber": 10,
        "DateUtc": "2024-11-02 15:00:00Z",
        "Location": "Old Trafford",
        "HomeTeam": "Man Utd",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": 1,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 103,
        "RoundNumber": 11,
        "DateUtc": "2024-11-09 15:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Arsenal",
        "Group": null,
        "HomeTeamScore": 1,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 117,
        "RoundNumber": 12,
        "DateUtc": "2024-11-23 15:00:00Z",
        "Location": "King Power Stadium",
        "HomeTeam": "Leicester",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": 1,
        "AwayTeamScore": 2
    },
    {
        "MatchNumber": 123,
        "RoundNumber": 13,
        "DateUtc": "2024-11-30 15:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Aston Villa",
        "Group": null,
        "HomeTeamScore": 3,
        "AwayTeamScore": 0
    },
    {
        "MatchNumber": 140,
        "RoundNumber": 14,
        "DateUtc": "2024-12-04 19:45:00Z",
        "Location": "St. Mary's Stadium",
        "HomeTeam": "Southampton",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": 1,
        "AwayTeamScore": 5
    },
    {
        "MatchNumber": 149,
        "RoundNumber": 15,
        "DateUtc": "2024-12-07 15:00:00Z",
        "Location": "Tottenham Hotspur Stadium",
        "HomeTeam": "Spurs",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": 3,
        "AwayTeamScore": 4
    },
    {
        "MatchNumber": 154,
        "RoundNumber": 16,
        "DateUtc": "2024-12-14 15:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Brentford",
        "Group": null,
        "HomeTeamScore": 2,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 164,
        "RoundNumber": 17,
        "DateUtc": "2024-12-21 15:00:00Z",
        "Location": "Goodison Park",
        "HomeTeam": "Everton",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": 0,
        "AwayTeamScore": 0
    },
    {
        "MatchNumber": 174,
        "RoundNumber": 18,
        "DateUtc": "2024-12-26 15:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Fulham",
        "Group": null,
        "HomeTeamScore": 1,
        "AwayTeamScore": 2
    },
    {
        "MatchNumber": 186,
        "RoundNumber": 19,
        "DateUtc": "2024-12-29 15:00:00Z",
        "Location": "Portman Road",
        "HomeTeam": "Ipswich",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": 2,
        "AwayTeamScore": 0
    },
    {
        "MatchNumber": 194,
        "RoundNumber": 20,
        "DateUtc": "2025-01-04 15:00:00Z",
        "Location": "Selhurst Park",
        "HomeTeam": "Crystal Palace",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": 1,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 208,
        "RoundNumber": 21,
        "DateUtc": "2025-01-15 19:45:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Bournemouth",
        "Group": null,
        "HomeTeamScore": 2,
        "AwayTeamScore": 2
    },
    {
        "MatchNumber": 213,
        "RoundNumber": 22,
        "DateUtc": "2025-01-18 15:00:00Z",
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Wolves",
        "Group": null,
        "HomeTeamScore": 3,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 220,
        "RoundNumber": 23,
        "DateUtc": "2025-01-25 15:00:00Z", // Match contre Man City
        "Location": "Etihad Stadium",
        "HomeTeam": "Man City",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": 3,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 227,
        "RoundNumber": 24,
        "DateUtc": "2025-02-03 15:00:00Z", // Match contre West Ham
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "West Ham",
        "Group": null,
        "HomeTeamScore": 2,
        "AwayTeamScore": 1
    },
    {
        "MatchNumber": 234,
        "RoundNumber": 25,
        "DateUtc": "2025-02-14 21:00:00Z", // Match contre Brighton
        "Location": "American Express Stadium",
        "HomeTeam": "Brighton",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": 3,
        "AwayTeamScore": 0
    },
    {
        "MatchNumber": 242,
        "RoundNumber": 26,
        "DateUtc": "2025-02-22 18:30:00Z", // Match contre Aston Villa
        "Location": "Villa Park",
        "HomeTeam": "Aston Villa",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 252,
        "RoundNumber": 27,
        "DateUtc": "2025-02-25 21:15:00Z", // Match contre Southampton
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Southampton",
        "Group": null,
        "HomeTeamScore": 4,
        "AwayTeamScore": 0
    },
    {
        "MatchNumber": 268,
        "RoundNumber": 28,
        "DateUtc": "2025-03-09 15:00:00Z", // Match contre Leicester
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Leicester",
        "Group": null,
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 273,
        "RoundNumber": 29,
        "DateUtc": "2025-03-16 15:00:00Z", // Match contre Arsenal
        "Location": "Emirates Stadium",
        "HomeTeam": "Arsenal",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 281,
        "RoundNumber": 30,
        "DateUtc": "2025-04-02 20:45:00Z", // Match contre Spurs
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Spurs",
        "Group": null,
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 296,
        "RoundNumber": 31,
        "DateUtc": "2025-04-05 16:00:00Z", // Match contre Brentford
        "Location": "Gtech Community Stadium",
        "HomeTeam": "Brentford",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 302,
        "RoundNumber": 32,
        "DateUtc": "2025-04-12 16:00:00Z", // Match contre Ipswich
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Ipswich",
        "Group": null,
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 314,
        "RoundNumber": 33,
        "DateUtc": "2025-04-19 16:00:00Z", // Match contre Fulham
        "Location": "Craven Cottage",
        "HomeTeam": "Fulham",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 325,
        "RoundNumber": 34,
        "DateUtc": "2025-04-26 16:00:00Z", // Match contre Everton
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Everton",
        "Group": null,
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 334,
        "RoundNumber": 35,
        "DateUtc": "2025-05-03 16:00:00Z", // Match contre Liverpool
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Liverpool",
        "Group": null,
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 345,
        "RoundNumber": 36,
        "DateUtc": "2025-05-10 16:00:00Z", // Match contre Newcastle
        "Location": "St. James' Park",
        "HomeTeam": "Newcastle",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 356,
        "RoundNumber": 37,
        "DateUtc": "2025-05-18 16:00:00Z", // Match contre Man Utd
        "Location": "Stamford Bridge",
        "HomeTeam": "Chelsea",
        "AwayTeam": "Man Utd",
        "Group": null,
        "HomeTeamScore": null,
        "AwayTeamScore": null
    },
    {
        "MatchNumber": 367,
        "RoundNumber": 38,
        "DateUtc": "2025-05-25 17:00:00Z", // Match contre Nott'm Forest
        "Location": "The City Ground",
        "HomeTeam": "Nott'm Forest",
        "AwayTeam": "Chelsea",
        "Group": null,
        "HomeTeamScore": null,
        "AwayTeamScore": null
    }
];
const classement = [
    { position: 1, logo: "../images CLUB/Logos/clubs/PL/Liverpool.png", equipe: "Liverpool", pts: 60, joues: 25, gagnes: 18, nuls: 6, perdus: 1, butsPour: 60, butsContre: 24, difference: 36 },
    { position: 2, logo: "../images CLUB/Logos/clubs/PL/Arsenal.png", equipe: "Arsenal", pts: 53, joues: 25, gagnes: 15, nuls: 8, perdus: 2, butsPour: 51, butsContre: 22, difference: 29 },
    { position: 3, logo: "../images CLUB/Logos/clubs/PL/Nottingham Forest.png", equipe: "Nottingham", pts: 47, joues: 25, gagnes: 14, nuls: 5, perdus: 6, butsPour: 41, butsContre: 29, difference: 12 },
    { position: 4, logo: "../images CLUB/Logos/clubs/PL/Manchester City.png", equipe: "Manchester City", pts: 44, joues: 25, gagnes: 13, nuls: 5, perdus: 7, butsPour: 52, butsContre: 35, difference: 17 },
    { position: 5, logo: "../images CLUB/Logos/clubs/PL/Bournemouth.png", equipe: "Bournemouth", pts: 43, joues: 25, gagnes: 12, nuls: 7, perdus: 6, butsPour: 44, butsContre: 29, difference: 15 },
    { position: 6, logo: "../images CLUB/Logos/clubs/PL/Chelsea.png", equipe: "Chelsea", pts: 43, joues: 25, gagnes: 12, nuls: 7, perdus: 6, butsPour: 47, butsContre: 34, difference: 13 },
    { position: 7, logo: "../images CLUB/Logos/clubs/PL/Newcastle United.png", equipe: "Newcastle", pts: 41, joues: 25, gagnes: 12, nuls: 5, perdus: 8, butsPour: 42, butsContre: 33, difference: 9 },
    { position: 8, logo: "../images CLUB/Logos/clubs/PL/Fulham.png", equipe: "Fulham", pts: 39, joues: 25, gagnes: 10, nuls: 9, perdus: 6, butsPour: 38, butsContre: 33, difference: 5 },
    { position: 9, logo: "../images CLUB/Logos/clubs/PL/Aston Villa.png", equipe: "Aston Villa", pts: 38, joues: 25, gagnes: 10, nuls: 8, perdus: 7, butsPour: 35, butsContre: 38, difference: -3 },
    { position: 10, logo: "../images CLUB/Logos/clubs/PL/Brighton & Hove Albion.png", equipe: "Brighton", pts: 37, joues: 25, gagnes: 9, nuls: 10, perdus: 6, butsPour: 38, butsContre: 38, difference: 0 },
    { position: 11, logo: "../images CLUB/Logos/clubs/PL/Brentford.png", equipe: "Brentford", pts: 34, joues: 25, gagnes: 10, nuls: 4, perdus: 11, butsPour: 43, butsContre: 42, difference: 1 },
    { position: 12, logo: "../images CLUB/Logos/clubs/PL/Tottenham Hotspur.png", equipe: "Tottenham", pts: 30, joues: 25, gagnes: 9, nuls: 3, perdus: 13, butsPour: 49, butsContre: 37, difference: 12 },
    { position: 13, logo: "../images CLUB/Logos/clubs/PL/Crystal Palace.png", equipe: "Crystal Palace", pts: 30, joues: 25, gagnes: 7, nuls: 9, perdus: 9, butsPour: 29, butsContre: 32, difference: -3 },
    { position: 14, logo: "../images CLUB/Logos/clubs/PL/Everton.png", equipe: "Everton", pts: 30, joues: 25, gagnes: 7, nuls: 9, perdus: 9, butsPour: 27, butsContre: 31, difference: -4 },
    { position: 15, logo: "../images CLUB/Logos/clubs/PL/Manchester United.png", equipe: "Manchester United", pts: 29, joues: 25, gagnes: 8, nuls: 5, perdus: 12, butsPour: 28, butsContre: 35, difference: -7 },
    { position: 16, logo: "../images CLUB/Logos/clubs/PL/West Ham United.png", equipe: "West Ham", pts: 27, joues: 25, gagnes: 7, nuls: 6, perdus: 12, butsPour: 29, butsContre: 47, difference: -18 },
    { position: 17, logo: "../images CLUB/Logos/clubs/PL/Wolverhampton Wanderers.png", equipe: "Wolverhampton", pts: 19, joues: 25, gagnes: 5, nuls: 4, perdus: 16, butsPour: 35, butsContre: 54, difference: -19 },
    { position: 18, logo: "../images CLUB/Logos/clubs/PL/Ipswich Town.png", equipe: "Ipswich", pts: 17, joues: 25, gagnes: 3, nuls: 8, perdus: 14, butsPour: 23, butsContre: 50, difference: -27 },
    { position: 19, logo: "../images CLUB/Logos/clubs/PL/Leicester City.png", equipe: "Leicester", pts: 17, joues: 25, gagnes: 4, nuls: 5, perdus: 16, butsPour: 25, butsContre: 55, difference: -30 },
    { position: 20, logo: "../images CLUB/Logos/clubs/PL/Southampton.png", equipe: "Southampton", pts: 9, joues: 25, gagnes: 2, nuls: 3, perdus: 20, butsPour: 19, butsContre: 57, difference: -38 }
];


function trouverDernierMatch(calendrier) {
    const maintenant = new Date();
    return calendrier.slice().reverse().find(match => new Date(match.DateUtc) < maintenant);
}

function trouverProchainMatch(calendrier) {
    const maintenant = new Date();
    return calendrier.find(match => new Date(match.DateUtc) > maintenant);
}

function afficherDernierMatch() {
    const dernierMatch = trouverDernierMatch(calendrier);
    const dernierMatchDiv = document.getElementById("dernier-match");
    dernierMatchDiv.innerText = ""; // Utiliser innerText pour vider le contenu

    if (dernierMatch) {
        const card = document.createElement("div");
        card.className = "card dernier-match"; // Classe pour le dernier match
        const cardBody = document.createElement("div");
        cardBody.className = "card-body";
        
        const title = document.createElement("h5")
        title.className = "card-title";
        title.innerText = "Dernier Match";
        
        const matchInfo = document.createElement("p");
        matchInfo.innerText = `${dernierMatch.HomeTeam} ${dernierMatch.HomeTeamScore !== null ? dernierMatch.HomeTeamScore : "?"} - ${dernierMatch.AwayTeamScore !== null ? dernierMatch.AwayTeamScore : "?"} ${dernierMatch.AwayTeam}`;
        
        const location = document.createElement("p");
        location.innerText = `Lieu: ${dernierMatch.Location}`;
        
        const date = document.createElement("p");
        date.innerText = `Date: ${new Date(dernierMatch.DateUtc).toLocaleString('fr-FR', { timeZone: 'UTC' })}`;
        
        cardBody.appendChild(title);
        cardBody.appendChild(matchInfo);
        cardBody.appendChild(location);
        cardBody.appendChild(date);
        card.appendChild(cardBody);
        dernierMatchDiv.appendChild(card);
    } else {
        dernierMatchDiv.innerText = "Aucun match joué récemment";
    }
}

function afficherProchainMatch() {
    const prochainMatch = trouverProchainMatch(calendrier);
    const prochainMatchDiv = document.getElementById("prochain-match");
    prochainMatchDiv.innerText = ""; // Utiliser innerText pour vider le contenu

    if (prochainMatch) {
        const card = document.createElement("div");
        card.className = "card prochain-match"; // Classe pour le prochain match
        const cardBody = document.createElement("div");
        cardBody.className = "card-body";
        
        const title = document.createElement("h5");
        title.className = "card-title";
        title.innerText = "Prochain Match";
        
        const matchInfo = document.createElement("p");
        matchInfo.innerText = `${prochainMatch.HomeTeam} vs ${prochainMatch.AwayTeam}`;
        
        const location = document.createElement("p");
        location.innerText = `Lieu: ${prochainMatch.Location}`;
        
        const date = document.createElement("p");
        date.innerText = `Date: ${new Date(prochainMatch.DateUtc).toLocaleString('fr-FR', { timeZone: 'UTC' })}`;
        
        cardBody.appendChild(title);
        cardBody.appendChild(matchInfo);
        cardBody.appendChild(location);
        cardBody.appendChild(date);
        card.appendChild(cardBody);
        prochainMatchDiv.appendChild(card);
    } else {
        prochainMatchDiv.innerText = "Aucun match à venir";
    }
}

function afficherTroisProchainsMatchs() {
    const prochainsMatchs = calendrier.filter(match => new Date(match.DateUtc) > new Date()).slice(0, 3);
    const prochainsMatchsDiv = document.getElementById("trois-prochains-matchs");
    prochainsMatchsDiv.innerText = ""; // Utiliser innerText pour vider le contenu

    const card = document.createElement("div");
    card.className = "card trois-prochains-matchs"; // Classe pour les trois prochains matchs
    const cardBody = document.createElement("div");
    cardBody.className = "card-body";

    const title = document.createElement("h5");
    title.innerText = "Trois Prochains Matchs";
    cardBody.appendChild(title);

    if (prochainsMatchs.length > 0) {
        prochainsMatchs.forEach(match => {
            const matchInfo = document.createElement("p");
            matchInfo.innerText = `${match.HomeTeam} vs ${match.AwayTeam} - ${new Date(match.DateUtc).toLocaleString('fr-FR', { timeZone: 'UTC' })}`;
            cardBody.appendChild(matchInfo);
        });
    } else {
        const noMatch = document.createElement("p");
        noMatch.innerText = "Aucun match à venir";
        cardBody.appendChild(noMatch);
    }

    card.appendChild(cardBody);
    prochainsMatchsDiv.appendChild(card);
}

function afficherClassementChelsea() {
    const corpsTableau = document.getElementById('classement-chelsea-table').querySelector('tbody');
    corpsTableau.innerText = ''; // Vider le corps du tableau

    // Afficher les 10 premières équipes
    for (let i = 0; i < Math.min(10, classement.length); i++) {
        const equipe = classement[i];
        const ligne = creerLigne(equipe);

        // Vérifier si l'équipe est Chelsea pour appliquer le style
        if (equipe.equipe === "Chelsea") {
            ligne.style.fontWeight = 'bold'; // Mettre la ligne en gras
            ligne.style.backgroundColor = '#d4af37'; // Changer la couleur de fond
            ligne.style.color = 'white'; // Changer la couleur du texte
        }
        corpsTableau.appendChild(ligne);
    }
}

function creerLigne(equipe) {
    const ligne = document.createElement('tr');

    const positionCell = document.createElement('td');
    positionCell.innerText = equipe.position;

    const logoCell = document.createElement('td'); // Nouvelle cellule pour le logo
    const logoElement = document.createElement('img');
    logoElement.src = equipe.logo; // Utiliser le chemin du logo
    logoElement.alt = `${equipe.equipe} Logo`; // Texte alternatif
    logoElement.style.width = '50px'; // Ajustez la taille du logo si nécessaire
    logoElement.style.height = '50px'; // Ajustez la taille du logo si nécessaire
    logoCell.appendChild(logoElement); // Ajouter le logo à la cellule

    const equipeCell = document.createElement('td');
    equipeCell.innerText = equipe.equipe;

    const ptsCell = document.createElement('td');
    ptsCell.innerText = equipe.pts;

    ligne.appendChild(positionCell);
    ligne.appendChild(logoCell); // Ajouter la cellule du logo
    ligne.appendChild(equipeCell);
    ligne.appendChild(ptsCell);

    return ligne;
}

afficherClassementChelsea();
afficherDernierMatch();
afficherProchainMatch();
afficherTroisProchainsMatchs(); 

