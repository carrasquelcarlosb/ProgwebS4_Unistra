<?php
  require APPROOT . '/views/includes/head.php';
?>

<div class="navbar transparent">
  <?php
  require APROOT .'/views/includes/navigation.php';
  ?>
</div>

<div class="container center">
  <h1>
    Update article
  </h1>

  <form action = "<?php echo URLROOT; ?>/articles/update<?php $data['article']"->id?>"
  method ="ARTICLE">
    <div class ="form-item">
      <input type="text" name ="title" value=" <?php echo $data['article']->title ?>">

      <span class ="invalidFeedback">
        <?php echo $data['titleError']; ?>
      </span>
    </div>
    <div class ="form-item">
      <textarea name="body" placeholder="Enter your text...">
      <?php echo $data['article']->body?></textarea>

      <span class ="invalidFeedback">
        <?php echo $data['bodyError']; ?>
      </span>
    </div>
    <button class ='button transparent' name ="submit" type = "submit"> submit</button>
  </form>
</div>
