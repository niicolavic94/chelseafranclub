<?php 


try {
    $bdd = new PDO('mysql:host=localhost;dbname=chelsea_club', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}

$message = '';

// Constants for error messages
define('ERROR_PSEUDO_TAKEN', 'Ce pseudo est déjà utilisé.');
define('ERROR_EMAIL_TAKEN', 'Cet email est déjà utilisé.');
define('ERROR_INVALID_PSEUDO', 'Le pseudo ne doit contenir que des lettres, chiffres et underscores.');
define('ERROR_INVALID_EMAIL', 'Veuillez entrer une adresse email valide.');
define('ERROR_EMPTY_FIELDS', 'Veuillez remplir tous les champs.');

if (isset($_POST['envoyer'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp']) && !empty($_POST['email'])) {
        $pseudo = htmlspecialchars(trim($_POST['pseudo']));
        $mdp = htmlspecialchars(trim($_POST['mdp']));
        $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

        if (!preg_match('/^[a-zA-Z0-9_]+$/', $pseudo)) {
            $message = ERROR_INVALID_PSEUDO;
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $message = ERROR_INVALID_EMAIL;
        } else {
            $checkUser  = $bdd->prepare('SELECT * FROM users WHERE pseudo = ? OR email = ?');
$checkUser ->execute(array($pseudo, $email));
            
            if ($checkUser ->rowCount() == 0) {
                $req = $bdd->prepare('INSERT INTO users(pseudo, mdp, email) VALUES (?, ?, ?)');
                $req->execute(array($pseudo, password_hash($mdp, PASSWORD_DEFAULT), $email));
                $message = 'Inscription réussie. Bienvenue, ' . $pseudo;
                $_SESSION['pseudo'] = $pseudo;
            } else {
                // Check which one is taken
                $existingUser  = $checkUser ->fetch();
                if ($existingUser ['pseudo'] === $pseudo) {
                    $message = ERROR_PSEUDO_TAKEN;
                } else {
                    $message = ERROR_EMAIL_TAKEN;
                }
            }
        }
    } else {
        $message = ERROR_EMPTY_FIELDS;
    }
}

if (isset($_POST['connexion'])) {
    if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
        $pseudo = htmlspecialchars(trim($_POST['pseudo']));
        $mdp = htmlspecialchars(trim($_POST['mdp']));

        $requete = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $requete->execute(array($pseudo));
        $user = $requete->fetch();

        if ($user && password_verify($mdp, $user['mdp'])) {
            $_SESSION['pseudo'] = $user['pseudo'];
            header('Location: ../accueilv2.php');
            exit();
        } else {
            $message = "Votre pseudo ou mot de passe est incorrect.";
        }
    } else {
        $message = ERROR_EMPTY_FIELDS;
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription / Connexion</title>
    <link rel="stylesheet" href="../style/style4.css">
</head>
<body>
    <div class="form-wrapper">
        <div class="toggle-container">
            <input type="checkbox" id="toggle" class="toggle" checked onchange="toggleForms()">
            <label for="toggle" class="toggle-label"></label>
        </div>
        <div class="form-container" id="inscriptionForm">
            <h2>Inscription</h2>
            <form action="" method="POST">
                <input type="text" name="pseudo" placeholder="Pseudo" required> 
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" 
                required onfocus="showPasswordCriteria()" onblur="hidePasswordCriteria()" oninput="validatePassword()"> 
                <div id="passwordCriteria" class="message-card">
                    <p id="length" class="invalid">Doit contenir au moins 8 caractères</p>
                    <p id="uppercase" class="invalid">Doit contenir une majuscule</p>
                    <p id="lowercase" class="invalid">Doit contenir une minuscule</p>
                    <p id="number" class="invalid">Doit contenir un chiffre</p>
                    <p id="special" class="invalid">Doit contenir un caractère spécial</p>
                </div>
                <input type="submit" name="envoyer" value="S'inscrire"> 
                <p><a href="views/forgot_password.php">Mot de passe oublié ?</a ></p>
            </form>
        </div>

        <div class="form-container" id="connexionForm" style="display: none;">
            <h2>Connexion</h2>
            <form method="POST" action="">
                <input type="text" name="pseudo" placeholder="Pseudo" required>
                <input type="password" name="mdp" placeholder="Mot de passe" required>
                <input type="submit" name="connexion" value="Se connecter">
                <p><a href="views/forgot_password.php">Mot de passe oublié ?</a></p>
            </form>
        </div>

        <?php if (!empty($message)) { echo '<p style="color:red;">' . $message . '</p>'; } ?>
    </div>

    <script>
        function validatePassword() {
            const password = document.getElementById('mdp').value;
            const criteria = [
                { regex: /.{8,}/, message: document.getElementById('length') },
                { regex: /\d/, message: document.getElementById('number') },
                { regex: /[!@#$%^&*]/, message: document.getElementById('special') },
                { regex: /[A-Z]/, message: document.getElementById('uppercase') },
                { regex: /[a-z]/, message: document.getElementById('lowercase') }
            ];

            criteria.forEach(criterion => {
                if (criterion.regex.test(password)) {
                    criterion.message.classList.remove('invalid');
                    criterion.message.classList.add('valid');
                } else {
                    criterion.message.classList.remove('valid');
                    criterion.message.classList.add('invalid');
                }
            });
        }

        function showPasswordCriteria() {
            document.getElementById('passwordCriteria').style.display = 'block';
        }

        function hidePasswordCriteria() {
            document.getElementById('passwordCriteria').style.display = 'none';
        }

        function toggleForms() {
            const inscriptionForm = document.getElementById('inscriptionForm');
            const connexionForm = document.getElementById('connexionForm');
            if (inscriptionForm.style.display === 'none') {
                inscriptionForm.style.display = 'block';
                connexionForm.style.display = 'none';
            } else {
                inscriptionForm.style.display = 'none';
                connexionForm.style.display = 'block';
            }
        }
    </script>
</body>
</html>