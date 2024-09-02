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

//myblogs
$router->get("/myblogs", "myblogs/index.php")->only("auth");
$router->get("/myblogs/create", "myblogs/create.php")->only("auth");
$router->post("/myblogs", "myblogs/store.php")->only("auth");

//myblog
$router->get("/myblog", "myblogs/show.php")->only("auth");
$router->get("/myblog/edit", "myblogs/edit.php")->only("auth");
$router->patch("/myblog", "myblogs/update.php")->only("auth");
$router->delete("/myblog", "myblogs/destroy.php")->only("auth");

//registration
$router->get("/register", "registration/create.php")->only("guest"); //done
$router->post("/register", "registration/store.php")->only("guest"); //done

//login
$router->get("/login", "sessions/create.php")->only("guest"); //done
$router->post("/sessions", "sessions/store.php")->only("guest"); //done
$router->delete("/sessions", "sessions/destroy.php")->only("auth"); //done