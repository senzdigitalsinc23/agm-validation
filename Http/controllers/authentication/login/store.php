<?php

use Core\Auth;
use Core\Session;
use Http\Models\LoginModel;

require_once BASE_PATH. "Core/helpers.php";

$header = "Create Note";

$login = new LoginModel();

if($login->validate($_POST)){

    $results = [];//find('users', 'username', $_POST['username'])
    
    $results = $login->select()
                    ->from('users AS us')
                     ->leftJoin('staff AS st', 'us.user_id', 'st.id')
                     ->leftJoin('units AS un', 'un.unit_id', 'st.unit')
                     ->where('username', '=')
                     ->fetch(['username' => $_POST['username']])
                     ->get();
                     
    
    if ($results ) {
        if (password_verify($_POST['password'], $results['password'])) {
            Auth::user($results);

            session_regenerate_id(true);

            //dd($results);

            if ($results['rank'] === 'Admin' || $results['rank'] === 'ITO') {
                redirect('/validations');
                exit;
            } else {
                redirect('/user');
            }
        }

        $login->error('Invalid username or password');
    }
    else{
        $login->error('Invalid username or password');
    }
}

Session::flash('errors', $login->errors);
Session::flash('data', $_POST);

//dd($_SESSION);

return redirect("/login");

/*  return view("authentication/login/index", [
    'header' => "Create Note",
    'errors' => $login->errors
]); */