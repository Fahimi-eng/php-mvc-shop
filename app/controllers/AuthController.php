<?php

class AuthController {
  private $userModel;

  public function __construct() {
    $this->userModel = new UserModel();
  }

  public function login() {
    // Handle login form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $email = $_POST['email'];
      $password = $_POST['password'];

      $user = $this->userModel->login($email, $password);

      if ($user) {
        // Redirect to dashboard
      } else {
        // Render login view with error message
        require 'app/views/login.php';
      }
    } else {
      // Render login view
      require 'app/views/login.php';
    }
  }

  public function register() {
    // Handle registration form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

      $this->userModel->register($name, $email, $password);

      // Redirect to login page
    } else {
      // Render registration view
      require 'app/views/register.php';
    }
  }

  public function logout() {
    // Destroy session and redirect to login page
    session_destroy();
    header('Location: /login');
  }

}

?>