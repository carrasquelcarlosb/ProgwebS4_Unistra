<?php
  require APPROOT . '/views/includes/head.php';
?>

<div class="navbar transparent">
  <?php
  require APROOT .'/views/includes/navigation.php';
  ?>
</div>

<div class= "container">
  <?php if( true == isLoggedIn())?>
    <a class="button green" href = "<?php echo URLROOT;?>/articles/create">
      New Article
    </a>
  <?php endif; ?>
  <?php foreach($data['articles'] as $article): ?>
    <div class='container-item'>
    <php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == $post->user_id): ?>
      <a class="button transparent"
      href = <?php echo URLROOT "./articles/update". $article->id ?> >
        Update
      </a>
    <?php endif; ?>
    <h2>
      <?php $article->$title; ?>
    </h2>

    <h3>
      <? php echo 'Created on: ' . date('F j h:m' strtotime($articles->createdAt))?>
    </h3>

    <p>
        <? php echo $article->body?>
    </p>
  </div>
</div>
