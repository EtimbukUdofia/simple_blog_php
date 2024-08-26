<?php

use core\App;
use core\Database;

$heading = "Post";

$db = App::resolve(Database::class);

$post = $db->query("SELECT * FROM posts WHERE post_id = :id",[
  "id" => $_GET["id"]
])->findOrFail();

require "views/blogs/show.view.php";