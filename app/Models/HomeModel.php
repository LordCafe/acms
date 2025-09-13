<?php

namespace App\Models;

use App\Core\Model;

class HomeModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function get(){
        return $this->getDataJson("home");
    }
}
