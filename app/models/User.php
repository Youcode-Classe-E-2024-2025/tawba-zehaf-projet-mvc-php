
<?php

namespace App\Models;

use App\Core\Database;

class User {
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
    }

    public function create($username, $password, $role) {
        // Logique pour créer un utilisateur dans la base de données
        $stmt = $this->db->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
        $stmt->execute([$username, password_hash($password, PASSWORD_DEFAULT), $role]);
    }

    public function find($id) {
        // Logique pour trouver un utilisateur par ID
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}