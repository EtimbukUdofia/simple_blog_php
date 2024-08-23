<?php

namespace core;
use PDO;

class Database{
  public $connection;
  public $statement;

  function __construct($config, $username = "root", $password = "")
  {
    $dsn = "mysql:" . http_build_query($config, "", ";");
    $this->connection = new PDO($dsn, $username, $password);
  }

  public function query($query, $params = []){
    $this->statement = $this->connection->prepare($query);
    $this->statement->execute($params);
    return $this;
  }

  public function find(){
    return $this->statement->fetch();
  }

  public function findAll(){
    return $this->statement->fetchAll();
  }

  public function findOrFail(){
    $result = $this->statement->find();

    return !$result ? abort() : $result;
  }
}