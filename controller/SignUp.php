<?php

if(isset($_POST["submit"])))
{
  // Grabs data from html site
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdRepeat"];
  $email = $_POST["email"];

  //Instanciate SignupContr class
  include "../classes/SignUpInc.php";
  include "../classes/SignupContr.php";
  $signup = new SignupContr($uId, $pwd, $pwdRepeat, $emailAdress);
}
