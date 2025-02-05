<?php

namespace App\Controllers\Front;

use App\Core\Controller;
use App\Core\View;

class HomeController extends Controller {
    private $view;

    public function __construct() {
        $this->view = new View();
    }

    public function index() {
        // Logique pour afficher la page d'accueil
        $this->view->render('front/home.twig', [
            'title' => 'Bienvenue',
            'message' => 'Bienvenue sur la page d\'accueil'
        ]);
    }
}
