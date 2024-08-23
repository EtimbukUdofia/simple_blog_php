<?php

use core\Router;

require("core/functions.php");
$config = require("config.php");

spl_autoload_register(function($classname){
  $classname = str_replace("\\", DIRECTORY_SEPARATOR, $classname);
  require $classname . ".php";
});


$router = new Router();

require("routes.php");

$uri = $_SERVER["REQUEST_URI"];
$method = $_POST["_method"] ?? $_SERVER["REQUEST_METHOD"];

$router->route($uri, $method);