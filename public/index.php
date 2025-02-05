<?php
// Autoload des classes
require '../vendor/autoload.php';

// Démarrer la session
App\Core\Session::start();

// Initialiser le routeur
$router = new App\Core\Router();

// Charger les routes
require '../app/config/routes.php';

// Traiter la requête
$router->dispatch($_SERVER['REQUEST_URI']);
?>