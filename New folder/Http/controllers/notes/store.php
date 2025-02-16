<?php

use Core\Auth;
use Core\Model;
use Core\Validator;

require_once BASE_PATH. "Core/helpers.php";

Auth::authorize(Auth::logged_in(), 403);

//$config = require_once BASE_PATH. "config.php";

$header = "Create Note";

$model = new Model();


$currentUserId = Auth::get_user_id();
$errors = [];

$body =  $_POST['body'];
    $title =  $_POST['title'];

    $_POST['user_id'] = $currentUserId;

    if (! Validator::string($title, 1, 50)){
        $errors['title'] = "Title must be a length of 1 to 50 characters";
    }
    if (! Validator::string($body)){
        $errors['body'] = "Note body must be a length of 1 to 255 characters";
    }
    
    if (empty($errors)) {
        
        $model->insert('notes', [
            'id'=>null, 
            'title'=>$title, 
            'body'=>$body, 
            'user_id'=>$_POST['user_id'] 
        ]);

        $body = "";
        $title = "";
    }


    view("notes/create", [
        'header' => "Create Note",
        'errors' => $errors
    ]);