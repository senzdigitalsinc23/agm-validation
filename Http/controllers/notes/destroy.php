<?php
use Core\Auth;
use Core\Model;

$header = "Note";

Auth::authorize(Auth::logged_in(), 403);

$currentUserId = Auth::get_user_id();

$model = new Model();

$note = $model->find('notes', 'id', $_GET['id'] ?? 0);

authorize($note['user_id'] === $currentUserId);

$model->remove('notes', 'id', $_POST['id']);

redirect('/notes');