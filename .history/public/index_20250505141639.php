<?php

require "../class/App/App.php";
\App\App::init();

$page = "home";

if (!empty($_GET["page"])) {
  $page = $_GET["page"];
}

if ($page == "home") {
} else if ($page == "listing") {
  $controller = new \App\Controller\Product();
  $controller->listing();
} else if ($page == "detail" && !empty($_GET["id"])) {
  $controller = new \App\Controller\Product();
  $controller->detail();
} else {
  // error 404
}
