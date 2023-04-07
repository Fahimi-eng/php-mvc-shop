<?php

class Database {
  private $host = 'localhost';
  private $username = 'root';
  private $password = '';
  private $dbname = 'shop';

  private $conn;

  public function __construct() {
    try {
      $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
    } catch(PDOException $e) {
      // Handle database connection error
    }
  }

  public function getConnection() {
    return $this->conn;
  }
}

?>