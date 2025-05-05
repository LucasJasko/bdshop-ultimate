<?php

namespace App\Controller;

class Product extends Controller
{

  public function listing()
  {
    $products = \App\Model\Product::getAll();
    $this->render("listing", compact($products));
  }

  public function detail($id)
  {
    $product = "";
    $this->render("detail", compact($product));
  }
}
