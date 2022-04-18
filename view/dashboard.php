<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/config/config.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/view/includes/head.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/helpers/sessionHelper.php";
?>
<div class="navbar transparent">
    <?php require $_SERVER['DOCUMENT_ROOT'] . "/app/view/includes/navigation.php"; ?>
</div>
<?php
session_start();
if(!$_SESSION['pwd'])
{
    header('Location:connexion.php');
}
?>
<!DOCTYPE HTML

<head>
<meta charset="utf-8">
</head>
<body>
<a href="/viewicles/create.php">Create a new article</a>
</body>
