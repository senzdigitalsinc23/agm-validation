
<?php
session_start();

$_SESSION['username'] = $_POST['form'];

echo $_POST['form'];

//header("location: xss-post.html");