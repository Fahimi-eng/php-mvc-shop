<?php

class UserModel {
  private $db;

  public function __construct() {
    $this->db = new Database();
  }

  public function register($name, $email, $password) {
    // Insert new user into database
  }

  public function login($email, $password) {
    // Query database for user with email and password
    // Return user data if found, null if not
  }
}

?>