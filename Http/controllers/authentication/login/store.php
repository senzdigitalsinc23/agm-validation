<?php

use Core\Auth;
use Core\Session;
use Http\Models\LoginModel;

require_once BASE_PATH. "Core/helpers.php";

$header = "Create Note";

$login = new LoginModel();

if($login->validate($_POST)){

    $results = [];

    if ($login->checkUsernameType($_POST)) {
        $results = $login->find('users', 'email', $_POST['username']);
    }else {
        $results = $login->find('users', 'username', $_POST['username']);
    }

    if ($results ) {
        if (password_verify($_POST['password'], $results['password'])) {
            Auth::user($results);

            session_regenerate_id(true);

            redirect('/');
        }

        $login->error('Invalid username or password');
    }
    else{
        $login->error('Invalid username or password');
    }
}

Session::flash('errors', $login->errors);
Session::flash('data', $_POST);

return redirect("/login");

/*  return view("authentication/login/index", [
    'header' => "Create Note",
    'errors' => $login->errors
]); */