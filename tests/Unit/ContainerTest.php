<?php

use Core\Container;
use Core\Database;


test('Resolves something in the container', function () {
    //arrange
    $container = new Container;

    $config = [
        'db' => [
            'dsn' =>[
                'host'      =>      "127.0.0.2",
                'port'      =>      3306,
                'dbname'    =>      "myapp",                
                'charset'   =>      "utf8mb4"
            ],
            'credentials' => [
                'user'      =>      "root",
                'password'  =>      "tem22ple12345?",
                'driver'    =>      "mysql",
                
            ]
        ]
    ];

    $container->bind(Database::class, fn() => new Database($config, 'root', 'tem22ple12345?'));
    //act
    $result = $container->resolve(Database::class);

    //assert / expect
    expect($result)->toBeInstanceOf(Database::class);
});
