<?php

if(isset($_POST["submit"])))
{
  // Grabs data from html site
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdrepeat = $_POST["pwdrepeat"];
  $email = $_POST["email"];

  //Instanciate SignupContr class
  include "../classes/signup.classes.php";
  include "../classes/SignupContr.php";
  $signup = new SignupContr($uId, $pwd, $pwdRepeat, $emailAdress);
}
