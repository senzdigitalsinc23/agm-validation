<?php

namespace Core\Middleware;

class Authorized {

    private const VALIDATION_PAGE = [

    ];

    public static function handle() {
        if ($_SESSION['USER']['rank'] !=='Admin' && $_SESSION['USER']['rank'] !=='ITM') {
            return redirect('/user');
        }
    }
}