<?php
  session_start();

  function isLoggedIn(): bool
  {
    if (!isset($_SESSION["user_id"]))
        return false;
    else
        return true;
  }
