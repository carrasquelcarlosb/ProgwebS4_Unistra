<?php
require_once dirname(__DIR__, 1) . "/config/config.php";
require_once dirname(__DIR__, 1) . "/view/head.php";
require_once dirname(__DIR__, 1) . "/helpers/sessionHelper.php";
?>
<div class="navbar transparent">
  <?php require dirname(__DIR__, 1) . "/view/navigation.php"; ?>
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
