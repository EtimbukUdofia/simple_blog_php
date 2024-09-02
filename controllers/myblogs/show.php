<?php

use core\App;
use core\Database;
use core\Session;

$db = App::resolve(Database::class);

$post = $db->query("SELECT * FROM posts WHERE post_id = :id", [
  "id" => $_GET["id"]
  ])->findOrFail();

authorize($post["user_id"] === Session::get("user")["id"]);
  
$heading = $post["title"];

require "views/myblogs/show.view.php";
