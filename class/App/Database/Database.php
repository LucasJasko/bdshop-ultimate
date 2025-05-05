<?php

namespace App\Database;

class Database extends \Core\Database\Database
{

  public function connect()
  {
    if ($this->db === null) {
      $this->db = new \PDO("mysql:host=" . $this->dbhost . ";dbname=" . $this->dbname . ";charset=utf8", $this->dbuser, $this->dbpass);
    }
    return $this->db;
  }

  protected function execute($sql, array | bool $bound = false, $all = true)
  {
    $stmt = $this->connect()->prepare($sql);

    if ($bound) {
      foreach ($bound as $key => $value) {
        if (gettype($value) == "array") {
          $stmt->bindValue($key, $value[0], $value[1]);
        } else {
          $stmt->bindValue($key, $value);
        }
      }
    }
    $stmt->execute();
    if ($all) {
      return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    } else {
      return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
  }
}
