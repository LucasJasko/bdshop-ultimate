<?php

namespace Core\Controller;

class Controller
{

  public $viewPath;

  public function render($view)
  {
    require $this->viewPath . $view . ".php";
  }
}
