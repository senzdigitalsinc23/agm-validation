<?php
use Http\Models\UserModel;



$_POST['month'] = date('M');
$_POST['year'] = date('Y');
$_POST['validated_by'] = $_SESSION['USER']['id'];

$user = new UserModel();

$page = isset($_SESSION['SEARCH']['page']) ? $_SESSION['SEARCH']['page'] : 1;
$name  =isset($_SESSION['SEARCH']['name']) ? $_SESSION['SEARCH']['name'] : '';

$uri = "/user?name=$name&search=1&page=$page";

if (isset($_POST['yes'])) {
    $_POST['status'] = 1;

    unset($_POST['yes']);
}else {
    $_POST['status'] = 0;

    unset($_POST['no']);
}

$user->insert('validations', $_POST);

if(isset($_SESSION['SEARCH'])){
    return redirect($uri);
} else{
    return redirect('/');
} 