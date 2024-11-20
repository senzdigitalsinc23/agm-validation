<?php

use Core\Session;
use Http\Models\LoginModel;

//dd($_SESSION);

$header = "Reset Password";

/* $staff['unit'] = $_SESSION['USER']['unit_name'];
$staff['name'] = $_SESSION['USER']['fname'] . ' ' . $_SESSION['USER']['oname'] . ' ' . $_SESSION['USER']['lname'];
$staff['grade'] = $_SESSION['USER']['grade'];
$staff['username'] = $_SESSION['USER']['username'];

$st = new LoginModel();

$grade = $st->select('rank_name')
      ->from('ranks')
      ->where('rank_id', '=')
      ->fetch(['rank_id' => $staff['grade']])
      ->get();

$staff['grade'] = implode($grade); */

return view('authentication/resetpasswd/create', [
    'header'    => $header,
]);