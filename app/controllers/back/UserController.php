<?php

namespace App\Controllers\Back;

use App\Core\Controller;
use App\Core\View;
use App\Models\User;

class UserController extends Controller {
    private $view;
    private $userModel;

    public function __construct() {
        $this->view = new View();
        $this->userModel = new User();
    }

    public function index() {
        // Récupérer la liste des utilisateurs
        $users = $this->userModel->findAll();

        // Afficher la vue avec la liste des utilisateurs
        $this->view->render('back/users.twig', [
            'title' => 'Gestion des utilisateurs',
            'message' => 'Liste des utilisateurs',
            'users' => $users
        ]);
    }
}