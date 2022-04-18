<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/config/config.php";
class Model
{
    private $pdo;
    public function setdb()
    {
        $dbServername = DB_HOST;
        $dbUsername = DB_NAME;
        $dbPassword = DB_PASS;
        $dbName = DB_NAME;
        $charset = "utf8";
        try {
            // data source name (DSN)
            //$pdo = new PDO("sqlite:". dirname(__FILE__) . "/database.db");
           $dsn =
                "mysql:host=" .
                $dbServername .
                ";dbname=" .
                $dbName .
                ";charset=" .
                $charset;

            $this->pdo = new PDO($dsn, $dbUsername, $dbPassword);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getDbb()
    {
        if ($this->pdo == null) {
            $this->setdb();
        }
        return $this->pdo;
    }

    /*protected function getAll($table, $obj)
    {
        $var = [];
        $req = $this->getDbb()->prepare(
            //SELECT * FROM".table."ORDER BY id desc
        );
        $req->execute();
        while ($date = $req->fetch(PDO::FETCH_ASSOC)) {
            $var[] = new $obj($date);
        }
        return $var;
        $req->closeCursor();
    } */
}
