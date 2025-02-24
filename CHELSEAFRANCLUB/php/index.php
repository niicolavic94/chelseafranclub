<?php
session_start();
require 'config/config.php';
require 'models/UserModel.php';
require 'controllers/UserController.php';
require 'controllers/LogoutController.php'; // Inclure le contrôleur de déconnexion

$userModel = new UserModel($bdd);
$userController = new UserController($userModel);
$logoutController = new LogoutController(); // Instancier le contrôleur de déconnexion

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'register':
            $userController->register();
            break;
        case 'login':
            $userController->login();
            break;
        case 'forgot_password':
            $userController->forgotPassword(); // Appeler la méthode de réinitialisation
            break;
        case 'logout':
            $logoutController->logout(); // Gérer la déconnexion
            break;
        default:
            $userController->login(); // Action par défaut
            break;
    }
} else {
    $userController->login(); // Action par défaut
}
?>