<?php

// Load necessary files
require_once 'app/config/database.php';
require_once 'app/models/UserModel.php';
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/AuthController.php';
require_once 'app/controllers/AdminController.php';
// Instantiate controllers based on URL
if ($_SERVER['REQUEST_URI'] === '/') {
  $controller = new HomeController();
  $controller->index();
}elseif ($_SERVER['REQUEST_URI'] === '/about'){
    $controller = new HomeController();
    $controller->about();
} elseif ($_SERVER['REQUEST_URI'] === '/login') {
  $controller = new AuthController();
  $controller->login();
} elseif ($_SERVER['REQUEST_URI'] === '/register') {
  $controller = new AuthController();
  $controller->register();
}
// --------panel routes---------
elseif (str_starts_with($_SERVER['REQUEST_URI'], '/panel')) {

    $string = $_SERVER['REQUEST_URI'];
    $first_letters = substr($string, 0, 6);
    $middle = substr($string, 6, 1);
    $rest_letters = substr($string, 7);

    //handle panel routes
    if (!$rest_letters){
        //index
        $controller = new AdminController();
        $controller->index();
    }
    else{
        switch ($rest_letters)
        {
            case 'login':
                echo 'login';
                break;

            default:
                // Handle 404 error
                http_response_code(404);
                require 'app/views/admin/error404.php';
                break;
        }
    }
}

else {
  // Handle 404 error
  http_response_code(404);
  require 'app/views/client/error404.php';
}

?>