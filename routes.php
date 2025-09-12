<?php 

return [

  "/" =>["HomeController", "index"],
  "/about" =>["AboutController", "index"],
  '/user/{id}' => ['UserController', 'show'],
  '/page/{slug}' => ['PageController', 'show'],
];