<?php

require "../class/App/App.php";
\App\App::init();

$page = "home";

if (!empty($_GET["page"])) {
  $page = $_GET["page"];
}
