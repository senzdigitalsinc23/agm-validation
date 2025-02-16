<?php

use Core\Auth;
use Http\Models\UserModel;

//dd($_POST['staff_id']);
if (Auth::logged_in()) {
    $staff = new UserModel();

    $staff_id = $_POST['staff_id'];

    $staff->remove('validations', ['staff_id' => $staff_id]);

}



return redirect('/user');