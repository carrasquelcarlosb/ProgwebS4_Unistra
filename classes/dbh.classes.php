<?php

class Dbh
{
  private function connect()
  {
    try
    {
        $username = "root";
        $password = "";
        $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
    }
    catch (PDOException $e)
    {
      print " Error!: " . $e->getMessage(). "<br/>";
      die(); 
    }

  }
}
