<?php
// Autoload des classes
require_once '../vendor/autoload.php';

// Démarrer la session
use App\core\Session;
use App\core\Router;

Session::start();

// Initialiser le routeur
$router = new Router();

// Charger les routes
require_once '../app/config/routes.php';
$router->addRoute('GET', '/article/{id}', [ArticleController::class, 'show']);
// Traiter la requête
$router->dispatch($_SERVER['REQUEST_URI']);
?>