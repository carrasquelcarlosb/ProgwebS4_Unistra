<?php
require_once dirname(__DIR__) . '/config/config.php';
require_once  dirname(__DIR__). '/views/navigation.php';
require_once dirname(__DIR__) . '/views/head.php';
?>

<?php
session_start();
if(isset($_POST['submit'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['pwd'])){
        // Default login values
        $default_pseudo = "admin905";
        $default_pwd = "admin";
        // Chosen values
        $chosen_pwd = htmlspecialchars($_POST['pwd']);
        $chosen_pseudo = htmlspecialchars($_POST['pseudo']);
        if( $chosen_pseudo == $default_pseudo AND $chosen_pwd == $default_pwd){
            $_SESSION['pwd'] = $chosen_pwd;
            header('Location: dashboard.php');
        }
        else{
            echo "Your password or username doesn't match our database";
        }

    }
    else{
        echo "Please input all the required fields.";
    }
}
?>

<!DOCTYPE HTML>
<html lang="en">

<body>
<form method="POST" action="" align="center">
        <input type="text" name="pseudo" autocomplete="off">
    <br>
        <input type="password" name="pwd">
    <br><br>
    <input type="submit" name = "submit">
</form>
</body>
</html>