<?php
require_once "../../config/config.php";
require_once "../../model/validate.php";
require_once "../includes/head.php";
?>
<!DOCTYPE html>
<html lang="en">


<body>
<form action="validate.php" method="post">
    <div class="login-box">
        <h1>Login</h1>

        <div class="textbook">
            <i class="fa fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Admin name"
                   name="adminName" value="">
        </div>

        <div class="textbook">
            <i class="fa fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Password"
                   name="password" value="">
        </div>

        <input class="button" type="submit"
               name="login" value="Sign In">
    </div>
</form>
</body>

</html>

?>