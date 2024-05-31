<?php

namespace Core;
use PDO;

class Database
{
    protected $connection;

    protected $statement;

    public function __construct($dsn, $user, $password)
    {
        $dsn = "mysql:".http_build_query($dsn, "", ";");
        $this->connection = new PDO($dsn, $user, $password);
    }

    public function query($sql, $data)
    {
        $stmt = $this->connection->prepare($sql);
        $stmt->execute($data);
        $this->statement = $stmt;
        return $this;
    }

    public function fetchAll()
    {
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find()
    {
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }
}