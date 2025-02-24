<?php
// controllers/UserController.php

class UserController {
    private $userModel;

    public function __construct($userModel) {
        $this->userModel = $userModel;
    }

    public function register() {
        $message = '';

        if (isset($_POST['envoyer'])) {
            if (!empty($_POST['pseudo']) && !empty($_POST['mdp']) && !empty($_POST['email'])) {
                $pseudo = htmlspecialchars(trim($_POST['pseudo']));
                $mdp = htmlspecialchars(trim($_POST['mdp']));
                $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

                // Validation des données
                if (!preg_match('/^[a-zA-Z0-9_]+$/', $pseudo)) {
                    $message = 'Le pseudo ne doit contenir que des lettres, chiffres et underscores.';
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $message = 'Veuillez entrer une adresse email valide.';
                } else {
                    $existingUsers = $this->userModel->checkUserExists($pseudo, $email);
                    if (empty($existingUsers)) {
                        if ($this->userModel->registerUser ($pseudo, $mdp, $email)) {
                            $_SESSION['pseudo'] = $pseudo;
                            header('Location: ../accueilv2.php'); // Rediriger après inscription
                            exit();
                        } else {
                            $message = 'Erreur lors de l\'inscription.';
                        }
                    } else {
                        $message = $existingUsers[0]['pseudo'] === $pseudo ? 'Ce pseudo est déjà utilisé.' : 'Cet email est déjà utilisé.';
                    }
                }
            } else {
                $message = 'Veuillez remplir tous les champs.';
            }
        }

        include 'views/register.php'; // Inclure la vue d'inscription
    }

    public function login() {
        $message = '';

        if (isset($_POST['connexion'])) {
            if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
                $pseudo = htmlspecialchars(trim($_POST['pseudo']));
                $mdp = htmlspecialchars(trim($_POST['mdp']));

                $user = $this->userModel->findUserByPseudo($pseudo);
                if ($user && password_verify($mdp, $user['mdp'])) {
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

        include 'views/login.php'; // Inclure la vue de connexion
    }

    public function forgotPassword() {
        $message = '';

        if (isset($_POST['reset'])) {
            if (!empty ($_POST['pseudo']) && !empty($_POST['email'])) {
                $pseudo = htmlspecialchars(trim($_POST['pseudo']));
                $email = htmlspecialchars(trim($_POST['email']));

                // Vérifiez si l'utilisateur existe
                $user = $this->userModel->findUserByPseudo($pseudo);
                if ($user && $user['email'] === $email) {
                    // Générer un token unique
                    $resetToken = bin2hex(random_bytes(16)); // 32 caractères hexadécimaux
                    $this->userModel->storeResetToken($pseudo, $resetToken); // Stocker le token

                    // Préparer l'email
                    $to = $email;
                    $subject = "Réinitialisation de votre mot de passe";
                    $resetLink = "https://votre-domaine.com/reset_password.php?token=" . $resetToken; // Remplacez par votre domaine
                    $body = "Bonjour $pseudo,\n\n";
                    $body .= "Cliquez sur le lien suivant pour réinitialiser votre mot de passe :\n";
                    $body .= "$resetLink\n\n";
                    $body .= "Si vous n'avez pas demandé cette réinitialisation, ignorez cet email.";

                    // En-têtes de l'email
                    $headers = "From: noreply@votre-domaine.com\r\n"; // Remplacez par votre adresse email

                    // Envoyer l'email
                    if (mail($to, $subject, $body, $headers)) {
                        $message = "Un email de réinitialisation a été envoyé à votre adresse.";
                    } else {
                        $message = "Erreur lors de l'envoi de l'email. Veuillez réessayer.";
                    }
                } else {
                    $message = "Aucun utilisateur trouvé avec ce pseudo et cet email.";
                }
            } else {
                $message = "Veuillez remplir tous les champs.";
            }
        }

        include 'views/forgot_password.php'; // Inclure la vue de réinitialisation
    }
}
?>