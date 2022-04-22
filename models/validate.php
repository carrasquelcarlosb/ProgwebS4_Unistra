<?php
require_once dirname(__DIR__) . "/models/Model.php";

function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}

if ($_SERVER["REQUEST_METHOD"]== "POST") {

    $adminName = test_input($_POST["adminName"]);
    $password = test_input($_POST["adminPwd"]);
    $stmt = $pdo->prepare("SELECT * FROM admin");
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach($users as $user) {

        if(($user['adminName'] == $adminName) &&
            ($user['adminPwd'] == $password)) {
            header("Location: dashboard.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}
