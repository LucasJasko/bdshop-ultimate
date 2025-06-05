<?php

namespace App\Database;

class Database extends \Core\Database\Database
{

  /**
   * @return \PDO Rretourne un objet PDO
   */
  public function connect()
  {
    if ($this->db === null) {

      try {
        $this->db = new \PDO("mysql:host=" . $this->dbhost . ";dbname=" . $this->dbname . ";charset=utf8", $this->dbuser, $this->dbpass);
      } catch (\PDOException $error) {
        die($error->getMessage());
      }

    }
    return $this->db;
  }

  /**
   * @param string $sql La requête SQL à exécuter en chaine de caractère
   * @param array|bool $bound Les valeur à associer à la requête avant exécution
   * @param bool $all Si false, alors la valeur retourné est un seul résultat. Sinon c'est un tableau de toute les valeurs
   */
  protected function execute(string $sql, array|bool $bound = false, bool $all = true)
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

    return $all ? $stmt->fetchAll(\PDO::FETCH_ASSOC) : $stmt->fetch(\PDO::FETCH_ASSOC);

  }
}
