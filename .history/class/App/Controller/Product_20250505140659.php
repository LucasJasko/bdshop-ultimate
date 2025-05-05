<?php

namespace App\Controller;

class Product extends Controller
{

  public function listing()
  {
    $recordset = "";
    $this->render("listing", compact($recordset));
  }

  public function detail() {}
}
