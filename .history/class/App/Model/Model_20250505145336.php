<?php

namespace App\Model;

class Model
{

  public static $table;
  public static $prefix;

  public static function getAll()
  {
    $sql = "SELECT * FROM " . self::$table . " ORDER BY ";
  }
  public static function getOne($id) {}
}
