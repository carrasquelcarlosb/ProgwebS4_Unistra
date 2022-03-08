<?php
  require APPROOT . '/web/carrasquel/public_html/progwebs4/views/includes/head.php';
  include_once '/web/carrasquel/public_html/progwebs4/model/dbh.php';
?>

<div class="section-landing">
  <?php
  require APROOT .'/web/carrasquel/public_html/progwebs4/views/includes/navigation.php';
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
