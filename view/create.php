<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/config/config.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/view/includes/head.php";

if(isset($_POST['article_title'], $_POST['article_body']))
    { if(!empty($_POST['article_title']) AND !empty($_POST['article_body']) )
        {

        }
    }
    else
        {
            $error = 'Please fill up all the boxes...';
        }
?>
<!DOCTYPE html>
<html lang="">
<div class="navbar transparent">
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/app/view/includes/navigation.php"; ?>
</div>

<div class="container center">
  <h1>
    Create
  </h1>

  <form action = "<?php echo URLROOT; ?>articles/create.php" method ="POST">
    <div class ="form-item">
        <label>
            <input type="text" name ="article_title" placeholder="Title">
        </label>
    </div>
    <div class ="form-item">
        <label>
            <textarea name="article_body" placeholder="Enter your text..."></textarea>
        </label>
    </div>
    <button class ='button transparent' name ="submit" type = "submit"> submit </button>
  </form>
</div>
</html>
