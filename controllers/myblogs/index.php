<?php

use core\Database;
use core\Session;

$heading = "My Blogs";

$config = require("config.php");
$db = new Database($config["database"]);

$posts = $db->query("
  SELECT * FROM posts WHERE user_id = :user_id
  ORDER BY created_at DESC
  ", [
  "user_id" => Session::get("user")["id"]
])->findAll();

require("views/myblogs/index.view.php");
