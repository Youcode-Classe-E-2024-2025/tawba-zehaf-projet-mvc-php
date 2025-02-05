<?php

namespace App\Controllers\Front;

use App\Core\Controller;
use App\Core\View;
use App\Models\Article;

class HomeController extends Controller {
    private $view;
    private $articleModel;

    public function __construct() {
        $this->view = new View();
        $this->articleModel = new Article();
    }

    public function index() {
        // Récupérer les articles récents
        $articles = $this->articleModel->findAll();

        // Afficher la vue avec les articles récents
        $this->view->render('front/home.twig', [
            'title' => 'Bienvenue',
            'message' => 'Bienvenue sur la page d\'accueil',
            'articles' => $articles
        ]);
    }
}
