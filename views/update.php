<?php
require_once dirname(__DIR__) . "/views/head.php"; ?>

<div class="navbar transparent">
  <?php require dirname(__DIR__) . "/views/navigation.php"; ?>
</div>

<div class="container center">
  <h1>
    Update article
  </h1>

  <form action = "<?php echo URL; ?>/articles/update<?php if (isset($data)) {
      $data['article']->id;
  } ?>"
  method ="POST">
    <div class ="form-item">
        <label>
            <input type="text" name ="title" value=" <?php echo $data["article"]->title; ?>">
        </label>

        <span class ="invalidFeedback">
        <?php echo $data["titleError"]; ?>
      </span>
    </div>
    <div class ="form-item">
        <label>
<textarea name="body" placeholder="Enter your text...">
<?php echo $data["article"]->body; ?></textarea>
        </label>

        <span class ="invalidFeedback">
        <?php echo $data["bodyError"]; ?>
      </span>
    </div>
    <button class ='button transparent' name ="submit" type = "submit"> submit</button>
  </form>
</div>
