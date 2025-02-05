<?php

namespace App\Core;

class Security {
    public static function sanitize($data) {
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }

    public static function generateCsrfToken() {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }
}