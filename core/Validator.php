<?php

namespace core;

class Validator{
  public static function email($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  public static function password($password, $min=1, $max=INF){
    $password = trim($password);
    return strlen($password) > $min && strlen($password < $max);
  }
}