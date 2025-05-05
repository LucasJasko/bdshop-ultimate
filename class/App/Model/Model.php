<?php

namespace App\Model;

class Model
{

  public static $table;
  public static $prefix;

  public static function getAll()
  {
    $sql = "SELECT * FROM " . self::$table;
    return \App\App::db()->fetchAll($sql);
  }
  public static function getOne($id)
  {
    // TO DO : A compléter
  }
}
