<?php

namespace App\Router;

class RouterAdmin extends \Core\Router\Router
{
  public static function run()
  {
    if (empty($_GET)) {

      require ROOT . "/view/home.php";

    } else if (isset($_GET["controller"]) && isset($_GET["method"])) {

      $controller = $_GET["controller"];
      $method = $_GET["method"];

      if ($controller == "admin" && $method == "login") {

        $controller = new \App\Controller\Admin();
        $controller->login();

      }

    } else {
      // 404
    }
  }
}