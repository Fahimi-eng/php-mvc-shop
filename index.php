<?php

// Load necessary files
require_once 'app/config/database.php';
require_once 'app/models/UserModel.php';
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/AuthController.php';

// Instantiate controllers based on URL
if ($_SERVER['REQUEST_URI'] === '/') {
  $controller = new HomeController();
  $controller->index();
} elseif ($_SERVER['REQUEST_URI'] === '/login') {
  $controller = new AuthController();
  $controller->login();
} elseif ($_SERVER['REQUEST_URI'] === '/register') {
  $controller = new AuthController();
  $controller->register();
} else {
  // Handle 404 error
  http_response_code(404);
  echo 'Page not found';
}

?>