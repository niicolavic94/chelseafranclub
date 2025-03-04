<?php
session_start();
require_once 'controllers/AuthController.php';

$authController = new AuthController();

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'register':
            $authController->register();
            break;
        case 'login':
            $authController->login();
            break;
        case 'reset':
            $authController->resetPassword();
            break;
        case 'logout':
            $authController->logout();
            break;
        default:
            $authController->login();
            break;
    }
} else {
    $authController->login();
}
?>