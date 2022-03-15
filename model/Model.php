<?php

class Model
{
    include '../config/config.php';
    private $dbServername;
    private $dbUsername;
    private $dbPassword;
    private $dbName;
    private $charset;

  public function setDbb()
  {
        $this->dbServername = "DB_HOST";
        $this->dbUsername = "DB_NAME";
        $this->dbPassword = "DB_PASS";
        $this->dbName = "DB_NAME";
        $this->charset = 'utf8';
        try {
            // data source name (DSN)
            $dsn ="mysql:host=".$this->dbServername.";dbname=".$this->dbName."
            ;charset=".$this->charset;
            $pdo = new PDO($dsn, $this->dbUsername, $this->dbPassword);
            $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\Exception $e) {
            echo "Connection failed: ".$e->getMessage();

        }
  }

  protected function getDbb()
  {
      if($pdo == null)
      {
         $this->setDbb();
      }
      return $pdo;
  }
/*
  protected function getAll($table, $obj)
  {
      $var = [];
      $req = this->getDbb()->prepare('SELECT * FROM'. table. 'ORDER BY id desc');
      $req->execute();
      while($date = $req->fetch(PDO::FETCH_ASSOC))
      {
          $var[] = new $obj($data);
      }
      return $var;
      $req->closeCursor();
  }
  */
}
