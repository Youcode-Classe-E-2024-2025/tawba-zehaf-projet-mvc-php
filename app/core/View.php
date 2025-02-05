<?php

namespace App\Core;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class View {
    private $twig;

    public function __construct() {
        $loader = new FilesystemLoader('../app/views');
        $this->twig = new Environment($loader);
    }

    public function render($template, $data = []) {
        echo $this->twig->render($template, $data);
    }
}