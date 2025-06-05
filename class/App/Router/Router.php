<?php

namespace App\Router;

class Router extends \Core\Router\Router
{

  /**
   * @return
   */
  public static function run()
  {
    if (empty($_GET)) {
      require ROOT . "/view/home.php";
      return true;
    }

    if (!isset($_GET["controller"]) || !isset($_GET["method"])) {
      //404
      return false;
    }

    $controller = $_GET["controller"];
    $method = $_GET["method"];

    if ($controller == "product" && $method == "listing") {
      return (new \App\Controller\Product())->listing();
    }

    if ($controller == "product" && $method == "detail" && isset($_GET["id"])) {
      return (new \App\Controller\Product())->detail($_GET["id"]);
    }

    if ($controller == "admin" && $method == "login") {
      return (new \App\Controller\Admin())->login();
    }

  }
}
