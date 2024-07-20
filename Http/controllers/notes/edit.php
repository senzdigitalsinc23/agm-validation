<?php
use Core\Auth;
use Core\Model;

Auth::authorize(Auth::logged_in(), 403);

$model = new Model();

$currentUserId = Auth::get_user_id();

$note = $model->find('notes', 'id', $_GET['id'] ?? 0);

authorize($note['user_id'] === $currentUserId);

view("notes/edit", [
    'note'  => $note,
    'errors' => [],
    'header' => "Edit Note"
]);