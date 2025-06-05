<?php

namespace Core\Database;

abstract class Database
{

  protected string $dbhost;
  protected string $dbname;
  protected string $dbpass;
  protected string $dbuser;
  protected $db;

  /**
   * @param string $dbhost Le nom de domaine de la base de donnée
   * @param string $dbname Le nom de la base de donnée
   * @param string $dbuser L'identifiant utilisateur de connexion à la base de donnée
   * @param string $dbpass Le mot de passe de connexion à la base de donnée
   */
  public function __construct(string $dbhost, string $dbname, string $dbuser, string $dbpass)
  {
    $this->dbhost = $dbhost;
    $this->dbname = $dbname;
    $this->dbuser = $dbuser;
    $this->dbpass = $dbpass;
  }

  /**
   * @param string $sql 
   * @param array|bool $bound4
   * @return 
   */
  public function fetch(string $sql, array|bool $bound = false)
  {
    return $this->execute($sql, $bound, false);
  }

  /**
   * @param string $sql
   * @param array|bool $bound
   */
  public function fetchAll(string $sql, array|bool $bound = false)
  {
    return $this->execute($sql, $bound, true);
  }
}
