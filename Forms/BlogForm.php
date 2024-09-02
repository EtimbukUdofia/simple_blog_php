<?php

namespace Forms;

use core\ValidationException;
use core\Validator;

class BlogForm extends Form
{
  public function __construct(public array $attributes)
  {
    // validate title
    if (!Validator::string($attributes["title"])) {
      $this->errors["title"] = "Please provide a valid Title";
    }
    // validate body
    if (!Validator::string($attributes["body"], 1, 1000)) {
      $this->errors["body"] = "A body of no more than 1000 characters is required";
    }
  }
}
