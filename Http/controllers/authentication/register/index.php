<?php

use Core\Session;

view('/authentication/register/index', [
    'errors' => Session::get('errors') ?? [],
    'data' => Session::get('data') ?? [],
    'header' => "Register"
]);