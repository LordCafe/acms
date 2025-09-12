<?php

require_once "Controller.php";

class HomeController extends Controller {
    public function index() {
      
      $data = [
        "title" => "Home",
        "description" => "Home page"
      ];
      $this->render("home.html.twig", $data );
    }
}