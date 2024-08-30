<?php

namespace Forms;

use core\ValidationException;
use core\Validator;

class RegisterForm{
  protected $errors = [];

  public function __construct(public array $attributes)
  {
    //validate username
    if (!Validator::string($attributes["username"])) {
      $this->errors["username"] = "Please provide a username";
    }

    // validate email
    if (!Validator::email($attributes["email"])) {
      $this->errors["email"] = "Please provide a valid email address";
    }
    // validate password
    if (!Validator::string($attributes["password"], 7)) {
      $this->errors["password"] = "Please provide a password of at least 8 characters";
    }

    // validate radio button input
    if (!Validator::radioBtn($attributes["gender"])) {
      $this->errors["gender"] = "Please select a valid gender";
    }
  }

  public static function validate($attributes){
    $instance = new static($attributes);

    return $instance->failed() ? $instance->throw() : $instance;
  }

  public function failed(){
    return count($this->errors);
  }

  public function throw(){
    ValidationException::throw($this->errors(), $this->attributes);
  }

  public function errors(){
    return $this->errors;
  }

  public function error($type, $message){
    $this->errors[$type] = $message;
    return $this;
  }
}