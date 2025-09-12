<?php 

require_once __DIR__.'/../Core/View.php';

class Controller{

  protected $view;

  public function __construct($theme = "default"){
    $this->view = new View($theme);
  }
  protected function render( $template, $data){
    $this->view->render($template, $data);
  }
}