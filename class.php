<?php
class API {
  private $base;
  public function __construct($base) {
    if(is_array($base)) {
      $this->base = $base;
    } else {
      $this->fail('Invalid base');
    }
  }
  public function setPassword($password, $field = 'password') {
    $methods = [$_GET, $_POST];
    foreach($methods as $method) {
      if($method[$field] == $password) {
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
    header('Content-Type: application/json');
    echo json_encode($this->base);
    $this->base = false;
  }
}
 ?>
