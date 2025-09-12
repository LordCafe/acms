<?php
require_once "Controller.php";


class AboutController extends Controller {
    public function index() {
      
      $data = [
        "title" => "Home",
        "description" => "Home page"
      ];
      $this->render("about.html.twig", $data );
    }
}