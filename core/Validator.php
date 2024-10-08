<?php

namespace core;

class Validator{
  public static function email($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  public static function string($value, $min=1, $max=INF){
    $value = trim($value);
    return strlen($value) > $min && strlen($value) < $max;
  }

  public static function radioBtn($value){
    $default = ["girl", "boy"];
    return in_array($value, $default);
  }
}