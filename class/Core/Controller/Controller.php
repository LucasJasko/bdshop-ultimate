<?php

namespace Core\Controller;

abstract class Controller
{
  protected string $viewPath;

  /**
   * @param string $viewFileName Le nom du fichier vue à récupérer
   * @param array $variables Les paramètres (variables) à fournir à la vue
   */
  protected function render(string $viewFileName, array $variables = [])
  {
    extract($variables);
    include_once $this->viewPath . $viewFileName . ".php";
  }
}
