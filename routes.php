<?php


$router->get("/", "index.php");
$router->get("/about", "about.php");
$router->get("/contact", "contact.php");

// blogs
$router->get("/blogs", "blogs/index.php");

//blog
$router->get("/blog", "blogs/show.php");

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
$router->get("/register", "registration/create.php")->only("guest");
$router->post("/register", "registration/store.php")->only("guest");

//login
$router->get("/login", "sessions/create.php")->only("guest");
$router->post("/sessions", "sessions/store.php")->only("guest");
$router->delete("/sessions", "sessions/destroy.php")->only("auth");