<?php

/* return [
    '/'             =>      "controllers/index.php",
    '/about'        =>      "controllers/about.php",
    '/notes'        =>      "controllers/notes/index.php",
    '/note'         =>      "controllers/notes/show.php",
    '/note/create'  =>      "controllers/notes/create.php",
    '/contact'      =>      "controllers/contact.php"
    
]; */

use Pest\Plugins\Only;

$router->get('/', "index.php");
/* 
$router->get('/about', "about.php");
$router->get('/contact', "contact.php"); */

/* $router->get('/notes', "notes/index.php")->only('auth');
$router->get('/note', "notes/show.php")->only('auth');
$router->delete('/note', "notes/destroy.php")->only('auth');
$router->get('/note/create', "notes/create.php")->only('auth');
$router->post('/note/create', "notes/store.php")->only('auth');
$router->get('/note/edit', "notes/edit.php")->only('auth');
$router->patch('/note/edit', "notes/update.php")->only('auth'); */


$router->get('/logout', "authentication/logout.php");
$router->get('/login', "authentication/login/index.php")->only('guest');
$router->get('/register', "authentication/register/index.php");

$router->post('/register', "authentication/register/store.php");
$router->post('/login', "authentication/login/store.php");

$router->get('/reset', "authentication/resetpasswd/index.php")->only('auth');
$router->post('/updatepasswd', "authentication/resetpasswd/create.php")->only('auth');

$router->get('/updatepasswd', "authentication/resetpasswd/create.php")->only('auth');

$router->get('/user', "user/index.php")->only('auth');
$router->post('/user', "user/store.php")->only('auth');
$router->post('/unvalidate', "user/unvalidate.php")->only('auth');

$router->get('/validations', "admin/dashboard.php")->only('auth')->only('authorized');
$router->get('/export-data', "export-data/excel.php")->only('auth');
$router->get('/export-pdf', "export-data/pdf.php")->only('auth');