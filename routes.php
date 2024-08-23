<?php


$router->get("/", "index.php");
$router->get("/about", "about.php");
$router->get("/contact", "contact.php");

// blogs
$router->get("/blogs", "blogs/index.php");
$router->get("/blogs/create", "blogs/create.php");
$router->post("/blogs", "blogs/store.php");

//blog
$router->get("/blog", "blogs/show.php");
$router->patch("/blog", "blogs/update.php");
$router->delete("/blog", "blogs/destroy.php");
$router->get("/blog/edit", "blogs/edit.php");