<?php

namespace App\Router;

class Router extends \Core\Router\Router
{

  public static function run()
  {
    if (empty($_GET)) {
      require ROOT . "/view/home.php";
    } else if (isset($_GET["controller"]) && isset($_GET["method"])) {

      $controller = $_GET["controller"];
      $method = $_GET["method"];

      if ($controller == "product" && $method == "listing") {

        $controller = new \App\Controller\Product();
        $controller->listing();
      } else if ($controller == "product" && $method == "detail" && isset($_GET["id"])) {
        $controller = new \App\Controller\Product();
        $controller->detail($_GET["id"]);
      }

    } else {
      // 404
    }
  }
}
