<?php

namespace App\Core;

class Controller {
    protected $view;

    public function __construct() {
        // Initialiser la vue ou d'autres composants si nécessaire
    }

    protected function render($view, $data = []) {
        // Logique pour rendre la vue avec les données fournies
        extract($data);
        require "../app/views/" . $view . ".php";
    }
}