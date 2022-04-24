<?php
require_once dirname( __DIR__) . "/config/config.php";

class Database {

    protected $pdo;
    private $statement;
    protected $dbHandler;

    public function __constructor()
    {
        $dbServername = DB_HOST;
        $dbUsername = DB_NAME;
        $dbPassword = DB_PASS;
        $dbName = DB_NAME;
        $charset = "utf8";
        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $dsn =
                "mysql:host=" .
                $dbServername .
                ";dbname=" .
                $dbName .
                ";charset=" .
                $charset;

            $this->pdo = new PDO($dsn, $dbUsername, $dbPassword, $options);
        } catch (Exception $e) {
            $error = $e->getMessage();
            echo $error;
        }
    }


    //Allows us to write queries
    public function query($sql) {
        $this->statement = $this->dbHandler->prepare($sql);
    }

    //Bind values
    public function bind($parameter, $value, $type = null) {
        switch (is_null($type)) {
            case is_int($value):
                $type = PDO::PARAM_INT;
                break;
            case is_bool($value):
                $type = PDO::PARAM_BOOL;
                break;
            case is_null($value):
                $type = PDO::PARAM_NULL;
                break;
            default:
                $type = PDO::PARAM_STR;
        }
        $this->statement->bindValue($parameter, $value, $type);
    }

    //Execute the prepared statement
    public function execute() {
        return $this->statement->execute();
    }

    //Return an array
    public function resultSet() {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    //Return a specific row as an object
    public function single() {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }
    function insert($query) {
        $insert_id = "";
        $result  = mysqli_query($this->pdo, $query);
        if(!empty($result)) {
            $insert_id = mysqli_insert_id($this->pdo);
        }
        return $insert_id;
    }

    //Get the row count
    public function rowCount() {
        return $this->statement->rowCount();
    }
}
