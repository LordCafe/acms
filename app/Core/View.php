<?php

namespace App\Core;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class View {

  protected $twig;

  public function __construct($theme = "default") {
    //Load theme 
    $loader = new FilesystemLoader(__DIR__."/../Views/$theme");
    $this->twig = new Environment($loader);
  }

  public function render($template, $data = []) {
    echo $this->twig->render($template, $data);
  }
}