<?php

use core\App;
use core\Database;
use core\Session;

$post = App::resolve(Database::class)->query("SELECT * FROM posts WHERE post_id = :post_id", [
  "post_id" => $_GET["id"]
])->findOrFail();

authorize($post["user_id"] === Session::get("user")["id"]);

$heading = "Edit";

require "views/myblogs/edit.view.php";