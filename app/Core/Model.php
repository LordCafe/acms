<?php

namespace App\Core;

Class Model {
  protected $db;
  protected $table;
  protected $id;
  protected $name;
  protected $folder;

  public function __construct(){

  }

  public function getDataJson($name){
    $file= Path::data($name).".json";
    $data = [];
    try {
      if(!file_exists($file)){
          return false;
      }
      $json=file_get_contents($file);
      //convert to array
      $data = json_decode($json, true);
    } catch (\Throwable $th) {
      //throw $th;
    }
    
    return $data;
  }

  public function getAllData(){

  }
}