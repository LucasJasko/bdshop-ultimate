<?php

namespace App\Auth;

class DBAuth
{

  public static function login(array $data)
  {

    $table = \App\Model\Admin::$table;
    $prefix = \App\Model\Admin::$prefix;

    if ($row = \App\App::db()->fetch("SELECT * FROM " . $table . " WHERE " . $data["login"]["field"] . " = :mail", [":mail" => $data["login"]["value"]])) {

      if (password_verify($data["pwd"]["value"], $row[$data["pwd"]["field"]])) {

        return $row[$prefix . "_id"];

      }

    }

    return false;

  }
}
