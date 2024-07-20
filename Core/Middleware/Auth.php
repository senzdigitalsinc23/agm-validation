<?php

namespace Core\Middleware;

class Auth {
    public static function handle() {
        if (! $_SESSION['USER'] ?? false) {
            redirect('/login');
        }
    }
}