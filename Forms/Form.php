<?php

namespace Forms;

use core\ValidationException;
use core\Validator;

class Form
{
  protected $errors = [];

  public function __construct(public array $attributes)
  {
  }

  public static function validate($attributes)
  {
    $instance = new static($attributes);

    return $instance->failed() ? $instance->throw() : $instance;
  }

  public function failed()
  {
    return count($this->errors);
  }

  public function throw()
  {
    ValidationException::throw($this->errors(), $this->attributes);
  }

  public function errors()
  {
    return $this->errors;
  }

  public function error($type, $message)
  {
    $this->errors[$type] = $message;
    return $this;
  }
}
