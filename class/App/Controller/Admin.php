<?php

namespace App\Controller;

class Admin extends Controller
{

  public function __construct()
  {
    $this->viewPath = ROOT . "/view/admin/";
  }

  public function login()
  {

    if (!empty($_POST["mail"]) && !empty($_POST["pwd"])) {
      if (\App\Auth\Auth::login($_POST["mail"], $_POST["pwd"])) {
        header("Location:/back-office/");
      }
    }

    $this->render("login", []);
  }
}