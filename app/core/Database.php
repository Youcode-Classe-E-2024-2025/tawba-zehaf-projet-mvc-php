<?php

namespace App\Core;

use PDO;
use PDOException;

class Database {
    private $host;
    private $dbname;
    private $user;
    private $password;
    private $pdo;

    public function __construct() {
        $config = require '../config/config.php'; // Charger la configuration

        $this->host = $config['host'];
        $this->dbname = $config['blog'];
        $this->user = $config['user'];
        $this->password = $config['password'];

        $this->connect();
    }

    private function connect() {
        try {
            $this->pdo = new PDO("pgsql:host={$this->host};dbname={$this->dbname}", $this->user, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->pdo;
    }
}