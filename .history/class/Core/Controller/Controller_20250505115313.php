<?php

namespace Core\Controller;

class Controller
{

  public $viewPath;

  public function render($view, $variables = [])
  {
    extract($variables);
    require $this->viewPath . $view . ".php";
  }
}
