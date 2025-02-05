<?php

namespace App\Controllers\Front;

use App\Core\Controller;
use App\Core\View;
use App\Models\Article;

class ArticleController extends Controller {
    private $view;
    private $articleModel;

    public function __construct() {
        $this->view = new View();
        $this->articleModel = new Article();
    }

    public function show($id) {
        // Récupérer l'article par ID
        $article = $this->articleModel->find($id);

        // Afficher la vue avec les détails de l'article
        $this->view->render('front/article.twig', [
            'title' => $article['title'],
            'content' => $article['content']
        ]);
    }
}