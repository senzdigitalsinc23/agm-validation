<?php
use Http\Models\UserModel;


$_POST['month'] = date('M');
$_POST['year'] = date('Y');
$_POST['validated_by'] = $_SESSION['USER']['id'];

$user = new UserModel();

//dd($_POST);

if (isset($_POST['yes'])) {
    $_POST['status'] = 1;

    unset($_POST['yes']);
}else {
    $_POST['status'] = 0;

    unset($_POST['no']);
}

//dd($_POST);
$user->insert('validations', $_POST);

return redirect('/');