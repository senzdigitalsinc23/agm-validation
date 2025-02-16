<?php

use Core\Auth;
use Core\Session;
use Http\Models\ResetPassModel;

$header = "Reset Password";

$user = new ResetPassModel();

//dd($_SESSION);

if ($user->validate($_POST)) {
    $username = $_SESSION['USER']['user_id'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $user->update('users', ['password' => $password, 'user_id' => $username]);

    if ($_SESSION['USER']['rank'] === "Admin") {
        redirect('validations');
    }else {
        redirect('user');
    }
}

return view('authentication/resetpasswd/create', [
    'header'        => $header
]);