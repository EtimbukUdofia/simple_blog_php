<?php

namespace Forms;

use core\ValidationException;
use core\Validator;

class LoginForm extends Form
{
  public function __construct(public array $attributes)
  {
    // validate email
    if (!Validator::email($attributes["email"])) {
      $this->errors["email"] = "Please provide a valid email address";
    }
    // validate password
    if (!Validator::string($attributes["password"])) {
      $this->errors["password"] = "Please provide a valid password";
    }
  }
}
