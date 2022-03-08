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
  include "../classes/signup-contr.classes.php";
  $signup = new SignupContr($uId, $pwd, $pwdRepeat, $emailAdress);
  
  //Running error handlers and user signups

  //Going back to front page
}
