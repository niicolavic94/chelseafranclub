<?php
session_start();
session_destroy(); // Détruire la session

// Rediriger vers la page de connexion après la déconnexion
header("Location: login.php"); // Remplacez par le nom de votre page de connexion
exit;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription / Connexion</title>
    <link rel="stylesheet" href="style/style3.css">
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
                <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" required onfocus="showPasswordCriteria()" onblur="hidePasswordCriteria()" oninput="validatePassword()"> 
                <div id="passwordCriteria" class="message-card">
                    <p id="length" class="invalid">Doit contenir au moins 8 caractères</p>
                    <p id="uppercase" class="invalid">Doit contenir une majuscule</p>
                    <p id="lowercase" class="invalid">Doit contenir une minuscule</p>
                    <p id="number" class="invalid">Doit contenir un chiffre</p>
                    <p id="special" class="invalid">Doit contenir un caractère spécial</p>
                </div>
                <input type="submit" name="envoyer" value="S'inscrire"> 
                <p><a href="?action=forgot_password">Mot de passe oublié ?</a></p>
            </form>
        </div>

        <div class="form-container" id="connexionForm" style="display: none;">
            <h2>Connexion</h2>
            <form method="POST" action="">
                <input type="text" name="pseudo" placeholder="Pseudo" required>
                <input type="password" name="mdp" placeholder="Mot de passe" required>
                <input type="submit" name="connexion" value="Se connecter">
                <p><a href="?action=forgot_password">Mot de passe oublié ?</a></p>
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
                { regex: /[!@#$%^& *()]/, message: document.getElementById('special') },
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