<?php

namespace App\Core;

class Controller {

  protected $view;

  public function __construct($theme = "default"){
    $this->view = new View($theme);
  }
  protected function render( $template, $data){
    //si no contiene la extension agregar html.twig
    if(!str_contains($template, ".")){
      $template .= ".html.twig";
    }
    $this->view->render($template, $data);
  }
}