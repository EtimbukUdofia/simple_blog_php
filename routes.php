<?php


$router->get("/", "controllers/index.php");
$router->get("/about", "controllers/about.php");
$router->get("/contact", "controllers/contact.php");

// blogs
$router->get("/blogs", "controllers/blogs/index.php");
$router->get("/blogs/create", "controllers/blogs/create.php");
$router->post("/blogs", "controllers/blogs/store.php");

//blog
$router->get("/blog", "controllers/blogs/show.php");
$router->patch("/blog", "controllers/blogs/update.php");
$router->delete("/blog", "controllers/blogs/destroy.php");
$router->get("/blog/edit", "controllers/blogs/edit.php");