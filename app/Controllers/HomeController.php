<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\HomeModel;

class HomeController extends Controller {
    public function index() {
      $Model = new HomeModel();
      $data = $Model->get();
      $this->render("home.html.twig", $data );
    }
}