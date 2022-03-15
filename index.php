<?php
    require 'config/config.php';
    require 'view/includes/head.php';
    include_once 'model/Model.php';
?>

<div class="section-landing">
  <?php
  require 'view/includes/navigation.php';
  ?>
</div>

<div class= "wrapper-landing">
    <h1> Intro page </h1>
    <h2> Subttitle</h2>
    <?php
    $object = new Model;
    $object->setDbb();
    ?>
</div>
