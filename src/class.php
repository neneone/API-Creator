<?php

namespace neneone\apicreator;
use \Exception;

class API {
  
  public $base;

  public function __construct($base) {
    $this->base = $base;
  }

  public function setPassword($password) {
    $methods = [$_GET, $_POST];

    foreach($methods as $method) {
      if(in_array($password, $method)) {
        $success = true;
      }
    }

    if(!$success) {
      throw new Exception('Invalid password');
    }
  }

  public function set($parameters) {
    $base = $this->base;

    if(!$parameters){
      throw new Exception('Invalid parameters');
      return false;
    }

    foreach($parameters as $key => $value) {
      if(is_numeric($key)) {
        $base[] = $value;
      } else {
        $base[$key] = $value;
      }
    }
    $this->base = $base;
    return true;
  }

  public function run() {
    header('content-type: application/json');
    echo json_encode($this->base);
    $this->base = false; //idk
    return true; // BOH
  }
}
