<?php

namespace Core;
class Auth {
    
    public static function user($user) {
        $_SESSION['USER'] = $user;
    }
    public static function logged_in() : bool{
        if (isset($_SESSION['USER'])) {
            return true;
        }

        return false;
    }

    public static function authorize($condition, $statusCode = Response::FORBIDDEN){
        if (!$condition) {
            abort($statusCode);
        }
    }

    public static function get_user_id() {
        return $_SESSION['USER']['id'] ?? false;
    }

    public static function logout() {
        if (isset($_SESSION['USER'])) {
            unset($_SESSION['USER']);

            session_destroy();

            $params = session_get_cookie_params();

            setcookie('PHPSESSID', '', time() - 3600, $params['path'], $params['domain']);

            return redirect('/login');
        }
    }
}