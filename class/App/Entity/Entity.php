<?php
namespace App\Entity;

class Entity
{
  public function __construct($row = false)
  {
    if ($row) {
      $this->hydrate($row);
    }
  }

  public function hydrate($data)
  {
    $class = explode('\\', get_called_class());
    $class = end($class);
    $prefix = ('\App\Model\\' . $class)::$prefix;

    foreach ($data as $key => $value) {
      $method = "set" . ucfirst(str_replace($prefix, "", $key));
      if (method_exists($this, $method)) {
        $this->{$method}($value);
      }
    }
  }
}
