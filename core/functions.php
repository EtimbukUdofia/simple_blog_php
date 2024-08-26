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

function formatDate($value){
  $date = date("d/m/y",strtotime($value));
  $day = date("d", strtotime($value));
  $month = date("M", strtotime($value));
  $year = date("Y", strtotime($value));
  return "$day $month, $year";
}