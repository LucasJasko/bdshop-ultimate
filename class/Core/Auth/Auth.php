<?php

namespace Core\Auth;

class Auth
{

  public static function getUser()
  {
    return self::isLoggedIn() ? $_SESSION["Auth"] : false;
  }

  public static function isLoggedIn()
  {
    return !empty($_SESSION["Auth"]);
  }

  public static function logOut()
  {
    $_SESSION["Auth"] = "";
    session_destroy();
  }

}