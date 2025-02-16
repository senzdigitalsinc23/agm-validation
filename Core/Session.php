<?php

namespace Core;

class Session
{
    public static function push($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function get($key, $default = null) {
        return $_SESSION['_flash'][$key] ?? $_SESSION['key()'] ?? $default;
    }

    public static function has($key) {
        return (bool) static::get($key);
        
    }

    public static function flash($key, $value) {
        $_SESSION['_flash'][$key] = $value;
    }

    public static function unflash($data = [] | "") {
        foreach ($data as $dat) {
            unset($_SESSION['_flash'][$dat]);
        }
    }
}