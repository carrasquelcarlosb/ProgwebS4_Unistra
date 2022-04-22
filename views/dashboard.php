<?php
require_once dirname(__DIR__) . "/config/config.php";
require_once  __DIR__ . "head.php";
require_once dirname(__DIR__) . "/helpers/sessionHelper.php";
?>
<div class="navbar transparent">
    <?php require __DIR__ . "navigation.php"; ?>
</div>
<?php
session_start();
if(!$_SESSION['pwd'])
{
    header('Location:connexion.php');
}
?>
<!DOCTYPE HTML>

<head>
<meta charset="utf-8">
</head>
<body>
<a href="/views/create.php">Create a new article</a>
</body>
