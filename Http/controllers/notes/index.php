<?php

use Core\Auth;
use Core\Model;

//Auth::authorize(Auth::logged_in(), 403);

require_once BASE_PATH. "Core/helpers.php";

$header = "My Notes";

$model = new Model();

$notes = $model->where('notes', 'user_id', Auth::get_user_id());

//dd($notes);

view("notes/index", [
    'header' => $header,
    'notes' => $notes
]);