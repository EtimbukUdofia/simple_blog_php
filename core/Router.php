<?php

namespace core;

use core\Middleware\Auth;
use core\Middleware\Guest;

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
    $this->add($uri, $controller, "GET");
    return $this;
  }

  public function post($uri, $controller){
    $this->add($uri, $controller, "POST");
    return $this;
  }

  public function delete($uri, $controller)
  {
    $this->add($uri, $controller, "DELETE");
    return $this;
  }

  public function put($uri, $controller)
  {
    $this->add($uri, $controller, "PUT");
    return $this;
  }

  public function patch($uri, $controller)
  {
    $this->add($uri, $controller, "PATCH");
    return $this;
  }

  public function only($middleware){
    return $this->routes[sizeof($this->routes) - 1]["middleware"] = $middleware;
  }

  public function route($uri, $method){
    foreach ($this->routes as $route){
      if($route["uri"] === $uri && $route["method"] === strtoupper($method)){

        // handle middleware
        if(isset($route["middleware"])){
          $Map = [
            "guest" => Guest::class,
            "auth" => Auth::class
          ];
          $middleware = $Map[$route["middleware"]];
          (new $middleware)->handle();
        }

        return require "controllers/" . $route["controller"];
      }
    }
    $this->abort();
  }

  protected function abort($statusCode = Response::NOT_FOUND){
    http_response_code($statusCode);
    require "views/{$statusCode}.php";
    die();
  }

  public function previuosUrl(){
    return $_SERVER["HTTP_REFERER"];
  }

  public function getter(){
    return $this->routes;
  }
}