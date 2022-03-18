<?php
require_once "../includes/head.php";
require_once "../../config/config.php";?>

<div class="navbar transparent">
  <?php
   require_once APPROOT . "view/includes/navigation.php"; ?>
</div>

<div class="container center">
  <h1>
    Create
  </h1>

  <form action = "<?php echo URLROOT; ?>/articles/create.php" method ="ARTICLE">
    <div class ="form-item">
      <input type="text" name ="title" placeholder="Title...">

      <span class ="invalidFeedback">
        <?php echo $data["titleError"]; ?>
      </span>
    </div>
    <div class ="form-item">
      <textarea name="body" placeholder="Enter your text..."></textarea>

      <span class ="invalidFeedback">
        <?php echo $data["bodyError"]; ?>
      </span>
    </div>
    <button class ='button transparent' name ="submit" type = "submit"> submit</button>
  </form>
</div>
