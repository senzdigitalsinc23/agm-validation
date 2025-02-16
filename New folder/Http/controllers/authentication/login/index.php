<?php

use Core\Session;

//dd($_SESSION);

view('/authentication/login/index', [
    'errors' => Session::get('errors') ?? [],
    'data'  => Session::get('data') ?? [],
    'header' => "Login"
]);