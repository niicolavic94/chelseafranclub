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

const scorers = [
    { player: "Cole Palmer", goals: 14, assists: 6 },
    { player: "Nicolas Jackson", goals: 9, assists: 5 },
    { player: "Noni Madueke", goals: 7, assists: 3 },
    { player: "Enzo Fernández", goals: 3, assists: 4 },
    { player: "Marc Cucurella", goals: 2, assists: 1 },
    { player: "Christopher Nkunku", goals: 2, assists: 0 },
    { player: "Jadon Sancho", goals: 2, assists: 4 },
    { player: "Tosin Adarabioyo", goals: 1, assists: 1 },
    { player: "Moisés Caicedo", goals: 1, assists: 2 },
    { player: "Axel Disasi", goals: 1, assists: 0 }
];

function generateTable(data) {
    const table = document.createElement('table');
    const thead = document.createElement('thead');
    const tbody = document.createElement('tbody');

    const headerRow = document.createElement('tr');
    const headerPlayer = document.createElement('th');
    headerPlayer.innerText = 'Joueur';
    const headerGoals = document.createElement('th');
    headerGoals.innerText = 'Buts';
    const headerAssists = document.createElement('th');
    headerAssists.innerText = 'Passes Décisives';

    headerRow.appendChild(headerPlayer);
    headerRow.appendChild(headerGoals);
    headerRow.appendChild(headerAssists);
    thead.appendChild(headerRow);
    table.appendChild(thead);

    // Limiter à 5 joueurs
    const topPlayers = data.slice(0, 5);

    topPlayers.forEach(item => {
        const row = document.createElement('tr');
        const playerCell = document.createElement('td');
        playerCell.innerText = item.player;
        const goalsCell = document.createElement('td');
        goalsCell.innerText = item.goals;
        const assistsCell = document.createElement('td');
        assistsCell.innerText = item.assists;

        row.appendChild(playerCell);
        row.appendChild(goalsCell);
        row.appendChild(assistsCell);
        tbody.appendChild(row);
    });

    table.appendChild(tbody);
    return table;
}

document.getElementById('tables-container').appendChild(generateTable(scorers));

function displayLastMatches() {
    const lastMatchesTableBody = document.getElementById('lastMatchesTableBody');
    const currentDate = new Date(); // Utiliser la date actuelle
    const pastMatches = calendrier.filter(match => new Date(match.DateUtc) < currentDate)
                                   .sort((a, b) => new Date(b.DateUtc) - new Date(a.DateUtc))
                                   .slice(0, 5); // Prendre les 5 derniers matchs

    let victoires = 0;
    let nuls = 0;
    let defaites = 0;

    pastMatches.forEach(match => {
        const row = document.createElement('tr');
        const dateCell = document.createElement('td');
        dateCell.innerText = new Date(match.DateUtc).toLocaleDateString('fr-FR');
        row.appendChild(dateCell);

        const matchCell = document.createElement('td');
        matchCell.innerText = `${match.HomeTeam} vs ${match.AwayTeam}`;
        row.appendChild(matchCell);

        const resultCell = document.createElement('td');
        let result;

        // Déterminer le résultat en fonction de l'équipe à domicile ou à l'extérieur
        if (match.HomeTeam === "Chelsea") {
            result = match.HomeTeamScore > match.AwayTeamScore ? 'Victoire' :
                     match.HomeTeamScore < match.AwayTeamScore ? 'Défaite' : 'Nul';
        } else {
            result = match.AwayTeamScore > match.HomeTeamScore ? 'Victoire' :
                     match.AwayTeamScore < match.HomeTeamScore ? 'Défaite' : 'Nul';
        }

        resultCell.innerText = result;
        row.appendChild(resultCell);
        lastMatchesTableBody.appendChild(row);

        // Compter les résultats
        if (result === 'Victoire') victoires++;
        else if (result === 'Défaite') defaites++;
        else nuls++;
    });

    // Créer le diagramme pour les 5 derniers matchs
    const ctxLastMatches = document.getElementById('lastMatchesChart').getContext('2d');
    new Chart(ctxLastMatches, {
        type: 'pie',
        data: {
            labels: ['Victoires', 'Nuls', 'Défaites'],
            datasets: [{
                data: [victoires, nuls, defaites],
                backgroundColor: ['#0056b3', '#d4af37', '#333'], // Couleurs personnalisées
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' },
            }
        }
    });
}

function displayStats() {
    const statsTableBody = document.getElementById('statsTableBody');
    statsTableBody.innerHTML = ''; // Vider le contenu précédent

    let victoires = 0;
    let nuls = 0;
    let defaites = 0;

    // Filtrer les matchs joués
    const playedMatches = calendrier.filter(match => match.HomeTeamScore !== null && match.AwayTeamScore !== null);

    playedMatches.forEach(match => {
        if (match.HomeTeam === "Chelsea") {
            if (match.HomeTeamScore > match.AwayTeamScore) victoires++;
            else if (match.HomeTeamScore < match.AwayTeamScore) defaites++;
            else nuls++;
        } else {
            if (match.AwayTeamScore > match.HomeTeamScore) victoires++;
            else if (match.AwayTeamScore < match.HomeTeamScore) defaites++;
            else nuls++;
        }
    });

    // Afficher les statistiques dans le tableau
    const victoiresRow = document.createElement('tr');
    const nulsRow = document.createElement('tr');
    const defaitesRow = document.createElement('tr');

    const victoiresCell = document.createElement('td');
    victoiresCell.innerText = 'Victoires';
    const victoiresCountCell = document.createElement('td');
    victoiresCountCell.innerText = victoires;

    const nulsCell = document.createElement('td');
    nulsCell.innerText = 'Nuls';
    const nulsCountCell = document.createElement('td');
    nulsCountCell.innerText = nuls;

    const defaitesCell = document.createElement('td');
    defaitesCell.innerText = 'Défaites';
    const defaitesCountCell = document.createElement('td');
    defaitesCountCell.innerText = defaites;

    victoiresRow.appendChild(victoiresCell);
    victoiresRow.appendChild(victoiresCountCell);
    nulsRow.appendChild(nulsCell);
    nulsRow.appendChild(nulsCountCell);
    defaitesRow.appendChild(defaitesCell);
    defaitesRow.appendChild(defaitesCountCell);

    statsTableBody.appendChild(victoiresRow);
    statsTableBody.appendChild(nulsRow);
    statsTableBody.appendChild(defaitesRow);

    // Créer le diagramme pour l'ensemble des matchs joués
    const ctxStats = document.getElementById('statsChart').getContext('2d');
    new Chart(ctxStats, {
        type: 'pie',
        data: {
            labels: ['Victoires', 'Nuls', 'Défaites'],
            datasets: [{
                data: [victoires, nuls, defaites],
                backgroundColor: ['#0056b3', '#d4af37', '#333'], // Couleurs personnalisées
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'top' },
            }
        }
    });
}

document.addEventListener("DOMContentLoaded", () => {
    displayLastMatches(); // Appel de la fonction pour afficher les derniers matchs
    displayStats(); // Appel de la fonction pour afficher les statistiques
});