<?php

// namespace Core;

// use PDO;

class Database {

    private $pdo;

    public function __construct()
    {
        $config = require '../config.php';
        $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}";
       
        try {
            $this ->pdo = new PDO($dsn, $config['user'], $config['password'], $config['options']);
        } catch (\Throwable $th) {
            die('Connection to the database has failed! ' . $th->getMessage());
        }

    }

    public function query($sql, $params = [])
    {
        $statement = $this->execute($sql. $params);
        $statement->execute($param);

        return $statement;
    }

    public function fetch($sql, $params = [])
    {
        return $this->query($sql, $params)->fetch();
    }

}