<?php

namespace App\Auth;

class Auth extends \Core\Auth\Auth
{
  public array $config;

  public static function login($login, $pwd)
  {
    $prefix = \App\Model\Admin::$prefix;

    $data = [
      "login" => [
        "field" => $prefix . "mail",
        "value" => $login
      ],
      "pwd" => [
        "field" => $prefix . "password",
        "value" => $pwd
      ]
    ];

    if ($id = DBAuth::login($data)) {

      $_SESSION["Auth"] = $id;
      return true;

    }

    return false;
  }

}