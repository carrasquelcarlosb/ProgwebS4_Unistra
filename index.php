<?php
  require APPROOT . '/views/includes/head.php';
  include_once '/model/dbh.php';
?>

<div class="section-landing">
  <?php
  require APROOT .'/views/includes/navigation.php';
  ?>
</div>

<div class= "wrapper-landing">
    <h1> Intro page </h2>
    <h2> Subttitle</h2>
    <?php
    $object = new Dhb;
    $object->connect();
    ?>
</div>
