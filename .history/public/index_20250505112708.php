<?php

require "../class/App/App.php";
\App\App::init();

$page = "home";

str_repeat()
if (!empty($_GET["page"])) {
  $page = $_GET["page"];
}
