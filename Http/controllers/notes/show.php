<?php
use Core\Auth;
use Core\Model;
require_once BASE_PATH. "Core/helpers.php";

Auth::authorize(Auth::logged_in(), 403);

$header = "Note";

$model = new Model();

$currentUserId = Auth::get_user_id();

$note =  $model->find('notes', 'id', $_GET['id'] ?? 0);

authorize($note['user_id'] === $currentUserId);

view("notes/show", [

    'header' => $header,

    'note' => $note

]);