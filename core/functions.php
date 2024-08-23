<?php

use core\Response;

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die();
};

function UrlIs($uri){
  return $uri === $_SERVER["REQUEST_URI"];
}

function abort($code = Response::NOT_FOUND){
  return "views/{$code}.php";
  die();
}