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
}
