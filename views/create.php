<?php
require_once dirname(__DIR__) . "/config/config.php";
require_once dirname(__DIR__) . "/views/head.php";
require_once dirname(__DIR__) . "/views/navigation.php";
if(isset($_POST['article_title'], $_POST['article_body'])) {
    if (!empty($_POST['article_title']) and !empty($_POST['article_body'])) {
        $error = 'Article already created.';
    } else {
        $error = 'Please fill up all the boxes...';
    }
    echo $error;
}
?>
<!DOCTYPE html>
<html lang="">
<div class="container center">

  <form action = "<?php echo URL; ?>/views/create.php" method ="post">
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
      <div class="form-group">
          <label>Image File</label>
          <input class="form-control" type="file" name="img">
      </div>
    <button class ='btn' type = "submit"> Create </button>
  </form>
</div>
</html>
