<?php
require_once dirname(__DIR__, 2) . "/config/config.php";
require_once dirname(__DIR__, 2) . "/view/includes/head.php";
require_once dirname(__DIR__, 2) . "/helpers/sessionHelper.php";
?>
<div class="navbar transparent">
  <?php require $_SERVER['DOCUMENT_ROOT'] . "/app/view/includes/navigation.php"; ?>
</div>

<div class= "container">
    <?php
        if (isLoggedIn())
            echo "<a class='button green' href='create.php'>New Article</a>"
     ?>

  <?php foreach (data["articles"] as $article): ?>
    <div class='container-item'>
        <?php ?>
            <a class="button transparent"
               href = "update.php" .$article->articleId >
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
