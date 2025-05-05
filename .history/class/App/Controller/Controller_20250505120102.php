<?php

namespace App\Controller;

class Controller extends \Core\Controller\Controller
{

  public function __construct()
  {
    $this->viewPath = ROOT . "view";
  }
}
