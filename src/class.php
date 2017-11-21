<?php

namespace neneone\apicreator;

class API {

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
      $this->fail('Invalid password');
    }
  }

  public function fail($error) {
    $this->error = $error;
    exit($this->error);
  }

  public function set($parameters) {
    $base = $this->base;

    if(is_array($parameters) == false) {

      return false;

      $this->fail('Invalid parameters');
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
  }
}
