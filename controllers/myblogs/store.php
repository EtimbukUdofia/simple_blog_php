<?php

use core\App;
use core\Database;
use core\Session;
use Forms\BlogForm;

$title = $_POST["title"];
$body = $_POST["body"];

$form = BlogForm::validate($attributes = [
  "title" => $title,
  "body" => $body
]);

$db = App::resolve(Database::class);

$db->query("INSERT INTO posts(body, title, user_id) VALUES(:body, :title, :user_id)", [
  "body" => ucfirst($body),
  "title" => ucwords($title),
  "user_id" => Session::get("user")["id"]
]);

redirect("/myblogs");
exit();