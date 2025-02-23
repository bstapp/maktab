<?php

class Pengguna_model {
  private $dbh;
  private $stmt;

  public function __construct()
  {
    //data source name
    $dsn = 'mysql:host=localhost;dbname=db_maktab';

    try {
      $this->dbh = new PDO($dsn, 'root', '');
    } catch(PDOException $e) {
        die($e->getMessage());
    }
  }
  public function getAllPengguna()
  {
    $this->stmt = $this->dbh->prepare('SELECT * FROM users');
    $this->stmt->execute();
    return $this->stmt->fetchAll( PDO::FETCH_ASSOC );
  }
}