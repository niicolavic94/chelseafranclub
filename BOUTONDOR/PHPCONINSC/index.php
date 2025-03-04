<?php
/*CHELSEA*/
include 'database.php';
include 'functions.php';


// J'active la session
session_start();

if (isset($_SESSION['user'])) {
    // L'utilisateur est déjà connecté, redirigez vers le tableau de bord
    header('Location: dashboard.php');
    exit();
}
// Vérifier si un message est présent
if (isset($_SESSION['message'])) {
    echo "<p>" . $_SESSION['message'] . "</p>"; // Afficher le message
    unset($_SESSION['message']); // Supprimer le message après l'affichage
}

// Déclaration des variables d'affichages
$class = ""; // J'affiche les formulaires de Connexion et d'Inscription
$message = "";
$messageCo = "";
$listUser    = "";

// Fonction de nettoyage de données
function sanitize($data) {
    return htmlentities(strip_tags(stripslashes(trim($data))));
}

// Fonction pour tester les données du formulaire d'inscription
function dataTestInscription() {
    if (empty($_POST["login_user"]) || empty($_POST["email_user"]) || empty($_POST["password_user"])) {
        return ["login_user" => '', "email_user" => '', "password_user" => '', "erreur" => 'Veuillez remplir les champs !'];
    }
    $login_user = sanitize($_POST['login_user']);
    $email_user = sanitize($_POST["email_user"]);
    $password_user = sanitize($_POST["password_user"]);

    if (!filter_var($email_user, FILTER_VALIDATE_EMAIL)) {
        return ["login_user" => '', "email_user" => '', "password_user" => '', "erreur" => 'Email pas au bon format !'];
    }

    $password_user = password_hash($password_user, PASSWORD_BCRYPT);
    return ["login_user" => $login_user, "email_user" => $email_user, "password_user" => $password_user, "erreur" => ''];
}

// Fonction pour tester les données du formulaire de connexion
function dataTestConnexion() {
    if (empty($_POST["loginCo"]) || empty($_POST["passwordCo"])) {
        return ["loginCo" => '', "passwordCo" => '', "erreur" => 'Veuillez remplir le Pseudo ET le Mot de Passe !'];
    }
    $loginCo = sanitize($_POST["loginCo"]);
    $passwordCo = sanitize($_POST["passwordCo"]);
    return ["loginCo" => $loginCo, "passwordCo" => $passwordCo, "erreur" => ''];
}

// Fonction pour envoyer les données en insertion à la BDD
function addUser ($login_user, $email_user, $password_user) {
    $bdd = new PDO('mysql:host=localhost;dbname=chelsea', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    try {
        $req = $bdd->prepare('INSERT INTO utilisateurs (login_user, email_user, mdp_user) VALUES (?, ?, ?)');
        $req->bindParam(1, $login_user, PDO::PARAM_STR);
        $req->bindParam(2, $email_user, PDO::PARAM_STR);
        $req->bindParam(3, $password_user, PDO::PARAM_STR);
        $req->execute();
        return "L'utilisateur avec le login : $login_user , a été enregistré avec succès !";
    } catch (Exception $error) {
        return "Erreur lors de l'inscription : " . $error->getMessage();
    }
}

// Fonction pour récupérer tous les utilisateurs en BDD
function readUsers() {
    $bdd = new PDO('mysql:host=localhost;dbname=chelsea', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    try {
        $req = $bdd->prepare('SELECT login_user, email_user, mdp_user FROM utilisateurs');
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $error) {
        return $error->getMessage();
    }
}

// Fonction pour récupérer un utilisateur en BDD selon un login précis
function readUserByLogin($login_user) {
    $bdd = new PDO('mysql:host=localhost;dbname=chelsea', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    try {
        $req = $bdd->prepare('SELECT login_user, email_user, mdp_user FROM utilisateurs WHERE login_user = ?');
        $req->bindParam(1, $login_user, PDO::PARAM_STR);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $error) {
        return $error->getMessage();
    }
}

// Fonction pour mettre en forme un profil user
function cardUser ($profil) {
    return "<article style='border-bottom : 3px solid white'>
        <h2>Login : {$profil['login_user']}</h2>
        <p>Email : {$profil['email_user']}</p>
    </article>";
}

// Tester si le formulaire d'inscription m'est envoyé
if (isset($_POST["inscription"])) {
    $tab = dataTestInscription();
    if ($tab['erreur'] != '') {
        $message = $tab['erreur'];
    }else {
        // Je vérifie que le login est disponible
        if (empty(readUserByLogin($tab['login_user']))) {
            // Si la réponse de la BDD est vide, alors le Login est disponible
            // Je lance l'ajout de mon utilisateur en BDD
            $message = addUser ($tab['login_user'], $tab['email_user'], $tab['password_user']);
        } else {
            // Si le login existe déjà en BDD
            $message = "Ce Login existe déjà en BDD !";
        }
    }
}

// Test si le formulaire de connexion m'est envoyé
if (isset($_POST['connexion'])) {
    // Je teste les données de connexion envoyées
    $tab = dataTestConnexion();

    // Je regarde si je suis dans le cas d'erreur
    if ($tab['erreur'] != '') {
        // Si c'est le cas : j'affiche l'erreur
        $messageCo = $tab['erreur'];
    } else {
        // Interroger la BDD pour récupérer les données de l'utilisateur à partir du login entré
        $data = readUserByLogin($tab['loginCo']);

        // Tester si je suis dans le cas d'erreur (probleme de lgin)
            if (empty($data)) {
                $messageCo = "Login ou mot de passe incorrect !";
            } else {
                // Vérifier le mot de passe
                if (password_verify($tab['passwordCo'], $data[0]['mdp_user'])) {
                    // Connexion réussie
                    $_SESSION['user'] = $data[0]['login_user'];
                    header("Location: dashboard.php"); // Redirection vers le tableau de bord
                    exit();
                } else {
                    $messageCo = "Login ou mot de passe incorrect !";
                }
            }
        }
    }
    
    // Récupérer tous les utilisateurs pour affichage
    $listUser  = readUsers();
    ?>
    

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../phpchelsea/style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">

  
</head>
<body>
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
</header>
<main>
    <h2>Inscription</h2>
    <form action="" method="post">
        <input type="text" name="login_user" placeholder="Votre pseudo" required>
        <input type="email" name="email_user" placeholder="Votre email" required>
        <input type="password" name="password_user" placeholder="Votre Mot de Passe" required>
        <input type="submit" name="inscription" value="S'inscrire">
    </form>
    <p><?php echo $message; ?></p>

    <h2>Connexion</h2>
    <form action="" method="post">
        <input type="text" name="loginCo" placeholder="Votre Pseudo :" required>
        <input type="password" name="passwordCo" placeholder="Votre Mot de Passe" required>
        <input type="submit" name="connexion" value="Se connecter">
    </form>
    <p><?php echo $messageCo; ?></p>
</main>
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
                    <img src="../HMTLCHELSEA/PHPCHELSEA/images/vecteezy_instagram-logo-png-instagram-icon-transparent_18930415" alt="Instagram">
                </a></li>
                <li><a href="https://x.com/chelsea_fran" target="_blank" rel="noopener noreferrer">
                    <img src="../HMTLCHELSEA/PHPCHELSEA/images//vecteezy_twitter-new-logo-twitter-icons-new-twitter-logo-x-2023-x_31737215.png" alt="Twitter">
                </a></li>
                <li><a href="https://discord.com/invite/1270438808197791844" target="_blank" rel="noopener noreferrer">
                    <img src="PHPCHELSEA/images/vecteezy_discord-logo-png-discord-icon-transparent-png_18930718.png" alt="Discord">
                </a></li>
            </ul>
        </div>
</footer>
<style>

/* INPUT */
input {
    background-color: gold; 
    padding: 10px;
    border: 1px solid #ccc; 
    border-radius: 5px; 
    margin-bottom: 10px; 
    transition: background-color 0.3s; 
}

input[type="text"],
input[type="email"],
input[type="password"] {
width: 100%; 
}

/* DEVIENT BLEU CIEL LORSQU'ON REMPLIT LE INPUT */
input[type="text"]:focus,
input[type="email"]:focus,
input[type="password"]:focus {
    background-color: #e0f7fa;
    border-color: blue; 
}

/* S'INSCRIRE ET SE CONNECTER DEVIENT BLEU CLAIR AU PASSAGE DU CURSEUR */
input[type="submit"] {
    background-color: blue;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}
input[type="submit"]:hover {
    background-color: #007bff; /* Hover color */
}
</style>
</html>
