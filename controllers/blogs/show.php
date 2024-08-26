<?php

use core\Database;

$heading = "Post";

$config = require("config.php");
$db = new Database($config["database"]);

$post = $db->query("SELECT * FROM posts WHERE post_id = :id",[
  "id" => $_GET["id"]
])->findOrFail();

require "views/blogs/show.view.php";