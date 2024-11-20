<?php

namespace Core;

class Database {
    private $connection;
    private $statement;

    public function __construct ($config, $username = 'root', $password = '') {

        $dsn = http_build_query($config['db']['dsn'], '', ';');

        //dd($dsn);

        $this->connection = new \PDO('mysql:'. $dsn, $username, $password, [
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = []) {
       
        //dd($query);
        $this->statement = $this->connection->prepare($query);

        $this->statement->execute($params);

        //echo $query . "<br>";

        return $this;
    }

    public function getAll(){
        return $this->statement->fetchAll();
    }

    public function get(){
        return $this->statement->fetch();
    }

    public function findOrFail(){
        
        $result = $this->get();

        if (! $result) {
            abort();
        }

        return $result;
    }
}
