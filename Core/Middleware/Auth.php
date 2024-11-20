<?php

namespace Core\Middleware;

class Auth {
    public static function handle() {
        if (! isset($_SESSION['USER'])) {
            return redirect('/');
        }
    }
}