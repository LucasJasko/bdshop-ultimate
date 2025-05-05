<?php

namespace App;

class App
{

  public static function init()
  {
    session_start();
    require "../../config/config.php";
    self::register();
  }

  public static function register()
  {
    spl_autoload_register([__CLASS__, "autoload"]);
  }

  public static function autoload($class)
  {
    $class = str_replace("\\", "/", $class);
    require ROOT . "/class/" . $class . ".php";
  }
}
