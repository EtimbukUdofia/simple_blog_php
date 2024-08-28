<?php

use core\Authenticator;
use Forms\LoginForm;

$form = LoginForm::validate($attributes = [
  "email" => $_POST["email"],
  "password" => $_POST["password"]
]);

$signedIn = (new Authenticator)->attempt($attributes["email"], $attributes["password"]);

if(!$signedIn){
  $form->error("main", "Username or password invalid")->throw();
}

redirect("/");