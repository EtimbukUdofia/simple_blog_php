<?php

use core\Database;

$heading = "Blogs";

$config = require("config.php");
$db = new Database($config["database"]);


$posts = $db->query("
  SELECT * FROM posts
  ORDER BY created_at DESC
")->findAll();

require("views/blogs/index.view.php");