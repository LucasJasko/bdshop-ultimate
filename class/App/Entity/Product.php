<?php

namespace App\Entity;

class Product extends Entity
{
  private ?float $price = 0;
  private ?int $id = 0;
  private ?string $serie = "";
  protected ?string $name = "";

  public function setPrice(float $price)
  {
    $this->price = ($price >= 0) ? $price : 0;
  }
  public function setName(string $name)
  {
    $this->name = $name;
  }
  public function setId(float $id)
  {
    $this->id = $id;
  }
  public function setSerie(string $serie)
  {
    $this->serie = $serie;
  }

  public function getPrice($raw = false)
  {
    if ($raw) {
      return $this->price;
    }
    return is_null($this->price) ? "" : htmlspecialchars($this->price);
  }
  public function getName($raw = false)
  {
    return $raw ? $this->name : htmlspecialchars($this->name);
  }
  public function getId($raw = false)
  {
    return $raw ? $this->id : htmlspecialchars($this->id);
  }
  public function getSerie($raw = false)
  {
    return $raw ? $this->serie : htmlspecialchars($this->serie);
  }
}