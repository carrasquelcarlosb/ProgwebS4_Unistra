<?php
require_once dirname(__DIR__) . "/views/head.php";
if (!$_SESSION['pwd']){
    header('Location: login.php');
}

