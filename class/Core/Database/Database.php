<?php

namespace Core\Database;

abstract class Database
{

  protected $dbhost;
  protected $dbname;
  protected $dbpass;
  protected $dbuser;
  protected $db;

  public function __construct($dbhost, $dbname, $dbuser, $dbpass)
  {
    $this->dbhost = $dbhost;
    $this->dbname = $dbname;
    $this->dbuser = $dbuser;
    $this->dbpass = $dbpass;
  }

  public function fetch($sql, $bound = false)
  {
    return $this->execute($sql, $bound, false);
  }

  public function fetchAll($sql, $bound = false)
  {
    return $this->execute($sql, $bound, true);
  }
}
