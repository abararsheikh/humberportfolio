<?php

// Get database connection
require_once('../bootstrap.php');

// Check for empty values
if ( $_POST['email'] === "")
{
  setcookie("emptyErr", "<span class='jc-req-err jc-forgot-err''>*Required. </span>", time() + 5);
  header('Location: forgot_password.php');
}

// Validate proper e-mail
elseif (!filter_var($_POST['email'],  FILTER_VALIDATE_EMAIL)) 
{
  setcookie("emailErr", "<span class='jc-email-err jc-forgot-err''>Please enter a valid e-mail address. </span>", time() + 5);
  header('Location: forgot_password.php');
}

else
{
  //Insert shared function here
  setCookie("emailSucc", "<span class='jc-email-succ'>Your password has been sent to your e-mail.</span>", time() + 5);
  header('location: forgot_password.php');
}
