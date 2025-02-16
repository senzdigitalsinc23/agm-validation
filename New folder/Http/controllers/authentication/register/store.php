<?php

use Core\Session;
use Http\Models\RegisterModel;

require_once BASE_PATH. "Core/helpers.php";

$header = "Grant Permision";

$register = new RegisterModel();

if (!$register->validate($_POST)) {
    Session::flash('errors', $register->errors);
    Session::flash('data', $_POST);

    return redirect('/register');
}else {

    unset($_POST['confirm']);

    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $register->insert('users', $_POST);

    $body = "";
    $title = "";

    $model = null;

    redirect('/login');
}
