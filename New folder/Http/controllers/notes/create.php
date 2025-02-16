<?php

use Core\Auth;

//Auth::authorize(Auth::logged_in(), 403);

view("notes/create", [
    'header' => "Create Note"
]);