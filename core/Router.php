<?php

namespace core;

class Router{
  protected $routes = [];

  public function add($uri, $controller, $method){
    $this->routes[] = [
      "uri" => $uri,
      "controller" => $controller,
      "method" => $method
    ];
  }

  public function get($uri, $controller){
    return $this->add($uri, $controller, "GET");
  }

  // public function post(){

  // }

  public function route($uri, $method){
    foreach ($this->routes as $route){
      if($route["uri"] == $uri && $route["method"] == $method){
        require $route["controller"];
      }
    }
  }

}