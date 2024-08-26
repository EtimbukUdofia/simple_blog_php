<?php

use core\Database;

$heading = "Blogs";

$config = require("config.php");
$db = new Database($config["database"]);


$posts = $db->query("SELECT * FROM posts")->findAll();

require("views/blogs/index.view.php");