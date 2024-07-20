<?php

/* return [
    '/'             =>      "controllers/index.php",
    '/about'        =>      "controllers/about.php",
    '/notes'        =>      "controllers/notes/index.php",
    '/note'         =>      "controllers/notes/show.php",
    '/note/create'  =>      "controllers/notes/create.php",
    '/contact'      =>      "controllers/contact.php"
    
]; */

$router->get('/', "index.php");
$router->get('/about', "about.php");
$router->get('/contact', "contact.php");

$router->get('/notes', "notes/index.php")->only('auth');
$router->get('/note', "notes/show.php")->only('auth');
$router->delete('/note', "notes/destroy.php")->only('auth');
$router->get('/note/create', "notes/create.php")->only('auth');
$router->post('/note/create', "notes/store.php")->only('auth');
$router->get('/note/edit', "notes/edit.php")->only('auth');
$router->patch('/note/edit', "notes/update.php")->only('auth');

$router->get('/logout', "authentication/logout.php")->only('auth');
$router->get('/login', "authentication/login/index.php")->only('guest');
$router->get('/register', "authentication/register/index.php")->only('guest');

$router->post('/register', "authentication/register/store.php")->only('guest');
$router->post('/login', "authentication/login/store.php")->only('guest');