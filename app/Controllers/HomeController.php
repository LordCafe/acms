<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller {
    public function index() {
      
      $data = [
        "title" => "Home",
        "description" => "Home page"
      ];
      $this->render("home.html.twig", $data );
    }
}