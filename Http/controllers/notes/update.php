<?php

use Core\App;
use Core\Auth;
use Core\Model;
use Core\Database;
use Core\Validator;

require_once BASE_PATH. "Core/helpers.php";

Auth::authorize(Auth::logged_in(), 403);

$currentUserId = Auth::get_user_id();
$errors = [];

$db = App::resolve(Database::class);

$body =  $_POST['body'];
    $title =  $_POST['title'];


    if (! Validator::string($title, 1, 50)){
        $errors['title'] = "Title must be a length of 1 to 50 characters";
    }
    if (! Validator::string($body)){
        $errors['body'] = "Note body must be a length of 1 to 255 characters";
    }
    
    if (empty($errors)) {
        $db->query('UPDATE notes  SET  `title` = :title, `body` = :body  WHERE id = :id AND user_id = :user_id', [            
            'title'=> $title,
            'body' => $body,
            'id' => $_GET['id'],
            'user_id' => $currentUserId           
        ]);

        redirect('/notes');

    }


    view("notes/edit", [
        'header' => "Edit Note",
        'errors' => $errors
    ]);