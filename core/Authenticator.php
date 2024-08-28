<?php

namespace core;

class Authenticator{
  public function attempt($email, $password){
    $user = App::resolve(Database::class)->query("SELECT * FROM users WHERE email = :email", [
      "email" => $email
    ]);

    // compare password
    if($user){
      if(password_verify($password, $user["password"])){
        $this->login([
          "email" => $email,
          "password" => $password,
          "id" => $user["id"]
        ]);

        return true;
      }
    }

    return false;
  }

  public function login($user){
    Session::put("user", [
      "email" => $user["email"],
      "username" => $user["username"],
      "id" => $user["id"]
    ]);

    session_regenerate_id(true);
  }
}