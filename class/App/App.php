<?php

namespace App;

class App
{

  private static $db;

  public static function init()
  {
    session_start();
    require_once "../config/config.php";
    self::autoloader();
  }

  private static function autoloader()
  {
    spl_autoload_register([__CLASS__, "autoload"]);
  }

  private static function autoload(string $class)
  {
    require_once ROOT . "/class/" . str_replace("\\", DIRECTORY_SEPARATOR, $class) . ".php";
  }

  public static function db()
  {
    // CECI EST UN SINGLETON: on vérifie si la valeur existe, sinon on la créé
    if (self::$db === null) {
      self::$db = new Database\Database(DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }
    return self::$db;
  }
}
