<?php

use core\App;
use core\Database;
use core\Session;

$db = App::resolve(Database::class);

$post = $db->query("SELECT * FROM posts WHERE post_id = :post_id", [
  "post_id" => $_POST["id"]
])->findOrFail();

authorize($post["user_id"] === Session::get("user")["id"]);

$db->query("DELETE FROM posts WHERE post_id = :post_id", [
  "post_id" => $_POST["id"]
]);

redirect("/myblogs");
exit();