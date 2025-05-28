<?php

require "../class/App/App.php";
\App\App::init();

if (!\App\Auth\Auth::isLoggedIn()) {
  header("Location:/back-office/login/");
  exit();
}

\App\Router\RouterAdmin::run();
