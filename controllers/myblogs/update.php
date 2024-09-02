<?php

use core\App;
use core\Database;
use core\Session;
use Forms\BlogForm;

$title = ucwords($_POST["title"]);
$body = $_POST["body"];
$post_id = $_POST["id"];

$form = BlogForm::validate($attributes = [
  "title" => $title,
  "body" => $body
]);

$db = App::resolve(Database::class);

$post = $db->query("SELECT * FROM posts WHERE post_id = :post_id", [
  "post_id" => $post_id
])->findOrFail();

authorize($post["user_id"] === Session::get("user")["id"]);

$db->query("UPDATE posts SET title = :title, body = :body WHERE post_id = :post_id", [
  "title" => $title,
  "body" => $body,
  "post_id" => $post_id
]);

redirect("/myblog?id=$post_id");
die();