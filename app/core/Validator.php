<?php

namespace App\Core;

class Validator {
    public function validateUsername($username) {
        return preg_match('/^[a-zA-Z0-9_]{3,20}$/', $username);
    }

    public function validatePassword($password) {
        return strlen($password) >= 6;
    }

    public function validateArticle($title, $content) {
        return !empty($title) && !empty($content);
    }
}