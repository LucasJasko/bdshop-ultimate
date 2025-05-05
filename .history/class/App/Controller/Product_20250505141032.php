<?php

namespace App\Controller;

class Product extends Controller
{

  public function listing()
  {
    $products = "";
    $this->render("listing", compact($products));
  }

  public function detail()
  {
    $product = "";
    $this->render("listing", compact($product));
  }
}
