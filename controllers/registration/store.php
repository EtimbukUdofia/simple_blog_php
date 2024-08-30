<?php

use core\App;
use core\Authenticator;
use core\Database;
use Forms\RegisterForm;

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$gender = $_POST["gender"];

$form = RegisterForm::validate($attributes = [
  "username" => $_POST["username"],
  "email" => $_POST["email"],
  "password" => $_POST["password"],
  "gender" => $_POST["gender"]
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

$profile_pic = "https://avatar.iran.liara.run/public/$gender?username=$username";

// hash password and store in DB
$db->query("INSERT INTO users(username, email, password, profile_pic) VALUES(:username, :email, :password, :profile_pic)", [
  "username" => $username,
  "email" => $email,
  "password" => password_hash($password, PASSWORD_BCRYPT),
  "profile_pic" => $profile_pic
]);

// login and redirect

(new Authenticator)->login([
  "username" => $username,
  "email" => $email,
  "password" => $password,
  "profile_pic" => $profile_pic
]);

header("location: /");
exit();
