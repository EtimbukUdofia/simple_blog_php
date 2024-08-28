<?php


$router->get("/", "index.php"); //done
$router->get("/about", "about.php"); //done
$router->get("/contact", "contact.php"); //done

// blogs
$router->get("/blogs", "blogs/index.php"); //done
$router->get("/blogs/create", "blogs/create.php");
$router->post("/blogs", "blogs/store.php");

//blog
$router->get("/blog", "blogs/show.php"); //done
$router->patch("/blog", "blogs/update.php");
$router->delete("/blog", "blogs/destroy.php");
$router->get("/blog/edit", "blogs/edit.php");

//registration
$router->get("/register", "registration/create.php");
$router->post("/register", "registration/store.php");

//login
$router->get("/login", "sessions/create.php");
$router->post("/sessions", "sessions/store.php");
$router->delete("/sessions", "sessions/destroy.php");