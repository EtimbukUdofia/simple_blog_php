<?php

namespace core;

class Authenticator{
  public function attempt($email, $password){
    $user = App::resolve(Database::class)->query("SELECT * FROM users WHERE email = :email", [
      "email" => $email
    ])->find();

    // compare password
    if($user){
      if(password_verify($password, $user["password"])){
        $this->login([
          "email" => $email,
          "username" => $user["username"],
          "user_id" => $user["user_id"],
          "profile_pic" => $user["profile_pic"]
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
      "id" => $user["user_id"],
      "profile_pic" => $user["profile_pic"]
    ]);

    session_regenerate_id(true);
  }

  public function logout(){
    Session::destroy();
  }
}