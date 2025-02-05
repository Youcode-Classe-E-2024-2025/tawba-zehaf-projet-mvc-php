<?php

namespace App\Controllers\Back;

use App\Core\Controller;
use App\Core\View;

class DashboardController extends Controller {
    private $view;

    public function __construct() {
        $this->view = new View();
    }

    public function index() {
        // Afficher le tableau de bord admin
        $this->view->render('back/dashboard.twig', [
            'title' => 'Tableau de bord',
            'message' => 'Bienvenue dans le tableau de bord admin'
        ]);
    }
}