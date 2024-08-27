<?php

use core\Router;
use core\Session;
use core\ValidationException;

require("core/functions.php");

spl_autoload_register(function($classname){
  $classname = str_replace("\\", DIRECTORY_SEPARATOR, $classname);
  require $classname . ".php";
});

session_start();

require("bootstrap.php");

$router = new Router();

require("routes.php");

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];

try{
  $router->route($uri, $method);
} catch(ValidationException $exception){
  Session::flash("errors", $exception->errors);
  Session::flash("old", $exception->old);

  return redirect($router->previuosUrl());
};

Session::unFlash();