<?php

use App\Core\Router;

$router = new Router();

// Routes pour le Front Office
$router->addRoute('GET', '/', function() {
    // Logique pour la page d'accueil
    echo 'Bienvenue sur la page d\'accueil';
});

$router->addRoute('GET', '/article', function() {
    // Logique pour afficher un article
    echo 'Affichage de l\'article';
});

// Routes pour le Back Office
$router->addRoute('GET', '/admin/dashboard', function() {
    // Logique pour le tableau de bord admin
    echo 'Tableau de bord admin';
});

$router->addRoute('GET', '/admin/users', function() {
    // Logique pour gérer les utilisateurs
    echo 'Gestion des utilisateurs';
});