<?php

class Dbh
{
    private $dbServername;
    private $dbUsername;
    private $dbPassword;
    private $dbName;
    private $charset;


  public function connect()
  {
        $this->dbServername = "osr-mysql.unistra.fr";
        $this->dbUsername = "carrasquel";
        $this->dbPassword = "daswaG5H";
        $this->dbName = "carrasquel"
        try {
            $dsn ="mysql:host=".$this->dbServername.";dbname=".$this->dbName.";charset=".$this->charset);
            $pdo = new PDO($dsn, $this->dbUsername, $this->dbPassword);
            $pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (\Exception $e) {
            echo "Connection failed: ".$e->getMessage();

        }
  }
}
