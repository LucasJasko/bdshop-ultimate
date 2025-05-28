<?php

require "../class/App/App.php";
\App\App::init();

var_dump($_POST);
var_dump($_SESSION);

\App\Router\Router::run();