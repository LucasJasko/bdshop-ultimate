<?php

namespace App\Model;

class Model
{

  public static $table;
  public static $prefix;

  public static function getAll()
  {
    // ici get called class sert à accéder à la définition de la class
    $sql = "SELECT * FROM " . get_called_class()::$table;
    return \App\App::db()->fetchAll($sql);
  }

  public static function getOne($id)
  {
    $sql = "SELECT * FROM " . get_called_class()::$table . " WHERE " . get_called_class()::$prefix . "id = :id";

    return \App\App::db()->fetch($sql, [":id" => $id]);
  }
}
