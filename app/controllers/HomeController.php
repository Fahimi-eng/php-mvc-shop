<?php

class HomeController {

  public function index() {
    // Render the home view
    require 'app/views/client/home.php';
  }

  public function about(){
    require 'app/views/login.php';
  }

}

?>