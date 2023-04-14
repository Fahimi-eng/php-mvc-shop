<?php

// Load necessary files
require_once 'app/config/database.php';
require_once 'app/models/UserModel.php';
require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/AuthController.php';
require_once 'app/controllers/AdminController.php';
require_once 'app/controllers/CategoryController.php';
require_once 'app/controllers/ProductController.php';

// Get the requested URL
$request = $_SERVER['REQUEST_URI'];

// Parse the URL to get the path and query string
$url_parts = parse_url($request);
$path = $url_parts['path'];

// Check if the query key exists
if (isset($url_parts['query'])) {
    $query_string = $url_parts['query'];
} else {
    $query_string = '';
}

//var_dump($path);
//var_dump($query_string);
//die();

// Instantiate controllers based on URL
if ($path === '/') {
  $controller = new HomeController();
  $controller->index();
}elseif ($path === '/about'){
    $controller = new HomeController();
    $controller->about();
} elseif ($path === '/login') {
  $controller = new AuthController();
  $controller->login();
} elseif ($path === '/register') {
  $controller = new AuthController();
  $controller->register();
}
// --------panel routes---------
elseif (str_starts_with($path, '/panel')) {

    $string = $path;
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
            //category
            case 'category':
                $controller = new CategoryController();
                $controller->index();
                break;

            case 'editcategory':
                $id = $_GET['id'];
                $controller = new CategoryController();
                $controller->edit($id);
                break;

            case 'updatecategory':
                $id = $_GET['id'];
                $category = $_POST['category'];
                $controller = new CategoryController();
                $controller->update($id,$category);
                break;

            case 'deletecategory':
                $id = $_GET['id'];
                $controller = new CategoryController();
                $controller->delete($id);
                break;

            case 'createcategory':
                $controller = new CategoryController();
                $controller->create();
                break;

            case 'storecategory':
                $controller = new CategoryController();
                $category = $_POST['category'];
                $controller->store($category);
                break;

            //product
            case 'product':
                $controller = new ProductController();
                $controller->index();
                break;

            case 'createproduct':
                $controller = new ProductController();
                $controller->create();
                break;

            case 'storeproduct':
                //we can filter and sanitize input files here
                $product = $_POST['product'];

                $controller = new ProductController();
                $controller->store($product,$_FILES['images']);
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