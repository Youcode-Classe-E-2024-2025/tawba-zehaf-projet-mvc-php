<?php

namespace App\Models;

use App\Core\Database;

class Article {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function create($title, $content, $author_id) {
        // Logique pour créer un article dans la base de données
        $stmt = $this->db->prepare("INSERT INTO articles (title, content, author_id) VALUES (?, ?, ?)");
        $stmt->execute([$title, $content, $author_id]);
    }

    public function find($id) {
        // Logique pour trouver un article par ID
        $stmt = $this->db->prepare("SELECT * FROM articles WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}