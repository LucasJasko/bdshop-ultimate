<?php

namespace App\Auth;

class DBAuth
{

  public static function login($login, $pwd): mixed
  {

    return \App\Model\Admin::getUserByCredentials($login, $pwd);

  }
}
