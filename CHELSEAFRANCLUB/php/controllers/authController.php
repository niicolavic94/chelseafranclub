<?php
// controllers/AuthController.php
// Ce fichier contient le contrôleur pour la gestion de l'authentification des utilisateurs.

require_once 'config/database.php';
require_once 'models/modelUser.php';
require_once 'models/PasswordReset.php';

class AuthController {
    private $userModel;
    private $passwordResetModel;

    public function __construct() {
        $db = getDatabaseConnection();
        $this->userModel = new User($db);
        $this->passwordResetModel = new PasswordReset($db);
    }

    public function register() {
        $message = '';
        if (isset($_POST['envoyer'])) {
            if (!empty($_POST['pseudo']) && !empty($_POST['mdp']) && !empty($_POST['email'])) {
                $pseudo = htmlspecialchars(trim($_POST['pseudo']));
                $mdp = htmlspecialchars(trim($_POST['mdp']));
                $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

                if ($this->userModel->findUser ($pseudo, $email) === false) {
                    $this->userModel->register($pseudo, $mdp, $email);
                    $message = 'Inscription réussie. Bienvenue, ' . $pseudo;
                    $_SESSION['pseudo'] = $pseudo;
                } else {
                    $message = 'Ce pseudo ou email est déjà utilisé.';
                }
            } else {
                $message = 'Veuillez remplir tous les champs.';
            }
        }
        include 'views/auth.php';
    }

    public function login() {
        $message = '';
        if (isset($_POST['connexion'])) {
            if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
                $pseudo = htmlspecialchars(trim($_POST['pseudo']));
                $mdp = htmlspecialchars(trim($_POST['mdp']));

                $user = $this->userModel->login($pseudo, $mdp);
                if ($user) {
                    $_SESSION['pseudo'] = $user['pseudo'];
                    header('Location: ../accueilv2.php');
                    exit();
                } else {
                    $message = "Votre pseudo ou mot de passe est incorrect.";
                }
            } else {
                $message = 'Veuillez remplir tous les champs.';
            }
        }
        include 'views/auth.php';
    }

    public function logout() {
        session_start();
        $_SESSION = array();
        session_destroy();
        header('Location: ../accueilv2.php');
        exit();
    }

    public function resetPassword() {
        $message = '';
        if (isset($_POST['reset'])) {
            if (!empty($_POST['pseudo']) && !empty($_POST['email'])) {
                $pseudo = htmlspecialchars(trim($_POST['pseudo']));
                $email = htmlspecialchars(trim($_POST['email']));

                $user = $this->passwordResetModel->findUserByPseudoAndEmail($pseudo, $email);
                if ($user) {
                    $token = bin2hex(random_bytes(50));
                    $expiry = date("Y-m-d H:i:s", strtotime('+1 hour'));
                    $this->passwordResetModel->createResetToken($pseudo, $token, $expiry);

                    $resetLink = "http://yourdomain.com/reset_password.php?token=" . $token;
                    $subject = "Réinitialisation de votre mot de passe";
                    $body = "Cliquez sur ce lien pour réinitialiser votre mot de passe: " . $resetLink;

                    if (mail($user['email'], $subject, $body)) {
                        $message = "Un lien de réinitialisation a été envoyé à votre adresse e-mail.";
                    } else {
                        $message = "Erreur lors de l'envoi de l'e-mail. Veuillez réessayer.";
                    }
                } else {
                    $message = "Aucun utilisateur trouvé avec ce pseudo et cet email.";
                }
            } else {
                $message = 'Veuillez entrer votre pseudo et votre adresse e-mail.';
            }
        }
        include 'views/reset_password.php';
    }
}
?>