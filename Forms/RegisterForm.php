<?php

namespace Forms;

use core\ValidationException;
use core\Validator;

class RegisterForm extends Form{
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
}