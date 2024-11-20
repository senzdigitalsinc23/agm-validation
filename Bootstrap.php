<?php

use Core\App;
use Core\Database;
use Core\Container;

$container = new Container();

$container->bind("Core\Database", function() {
    $config = require_once base_path("config.php");

    return new Database($config, $config['db']['credentials']['user'], $config['db']['credentials']['password']);
});


App::setContainer($container);

//$db = $container->resolve("Core\Database");

//dd($db);
