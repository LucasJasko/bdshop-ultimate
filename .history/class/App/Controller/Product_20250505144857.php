<?php

namespace App\Controller;

class Product extends Controller
{

  public function listing()
  {
    $products = \App\Controller\Product::;
    $this->render("listing", compact($products));
  }

  public function detail($id)
  {
    $product = "";
    $this->render("detail", compact($product));
  }
}
