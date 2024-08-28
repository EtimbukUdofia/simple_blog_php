<?php

use core\App;
use core\Authenticator;
use core\Database;
use Forms\RegisterForm;

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$form = RegisterForm::validate($attributes = [
  "username" => $_POST["username"],
  "email" => $_POST["email"],
  "password" => $_POST["password"]
]);

// check if user exists
$db = App::resolve(Database::class);

$mail = $db->query("SELECT * FROM users WHERE email = :email", [
  "email" => $email
])->find();

$user = $db->query("SELECT * FROM users WHERE username = :username", [
  "username" => $username
])->find();

if($mail){
  $form->error("email", "This email address in already associated with an account")->throw();
}

if($user){
  $form->error("username", "This username is already taken please choose a different username")->throw();
}

// hash password and store in DB
$db->query("INSERT INTO users(username, email, password) VALUES(:username, :email, :password)", [
  "username" => $username,
  "email" => $email,
  "password" => password_hash($password, PASSWORD_BCRYPT)
]);

// login and redirect

(new Authenticator)->login([
  "username" => $username,
  "email" => $email,
  "password" => $password
]);

header("location: /");
exit();
