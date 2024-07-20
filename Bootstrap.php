<?php

use Core\Container;
use Core\Database;
use Core\App;

$container = new Container();

$container->bind("Core\Database", function() {
    $config = require_once base_path("config.php");

    return new Database($config, $config['db']['credentials']['user'], $config['db']['credentials']['password']);
});


App::setContainer($container);

//$db = $container->resolve("Core\Database");

//dd($db);
