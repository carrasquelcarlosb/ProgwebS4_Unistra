<?php
require_once "../../config/config.php";
require_once "../includes/head.php";
?>
<div class="navbar transparent">
  <?php require "../includes/navigation.php"; ?>
</div>

<div class= "container">
    <!--?php if (true == isLoggedIn());?>-->
        <a class="button green" href = "<?php echo URLROOT; ?>view/articles/create.php">
            New Article
        </a>

  <?php foreach ($data["articles"] as $article): ?>
    <div class='container-item'>
        <?php if (
            isset($_SESSION["id"]) &&
            $_SESSION["id"] == $article->id
        ); ?>
            <a class="button transparent"
                href = "<?php echo URLROOT; ?> ./articles/update.php".$article->articleId >
                Update
            </a>
            <h2>
                <?php $article->title; ?>
            </h2>
            <h3>
                <?php echo "Created on: ".
                    date("F j h:m".strtotime($article->createdAt)); ?>
            </h3>
            <p>
                <?php echo $article->body; ?>
            </p>
    </div>
    <?php endforeach; ?>
</div>
