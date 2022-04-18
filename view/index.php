<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "app/view/includes/head.php";
if (!$_SESSION['pwd']){
    header('Location: login.php');
}
?>
