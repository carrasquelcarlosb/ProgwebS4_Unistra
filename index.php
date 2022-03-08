<?php
  require APPROOT . '../views/includes/head.php';
  include_once '../model/Dbh.php';
?>

<div class="section-landing">
  <?php
  require APPROOT .'../views/includes/navigation.php';
  ?>
</div>

<div class= "wrapper-landing">
    <h1> Intro page </h2>
    <h2> Subttitle</h2>
    <?php
    $object = new Dbh;
    $object->connect();
    ?>
</div>
