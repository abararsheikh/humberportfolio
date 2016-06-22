<?php

// Get database connection
require_once('../bootstrap.php');

// Check for empty values
if ( $_POST['email'] === "")
{
  setcookie("jcEmptyErr", "<span class='jc-req-err jc-forgot-err''>Please enter your e-mail address. </span>", time() + 5);
  header('Location: forgot_password.php');
}

// Validate proper e-mail
elseif (!filter_var($_POST['email'],  FILTER_VALIDATE_EMAIL)) 
{
  setcookie("jcEmailErr", "<span class='jc-email-err jc-forgot-err''>Please enter a valid e-mail address. </span>", time() + 5);
  header('Location: forgot_password.php');
}

else
{
  if (function_exists ('forgot_password'))
  {
    $jc_The_Email_Message = forgot_password($_POST['email'], 'students');
    if ($jc_The_Email_Message === "*Instructions about how to reset your password have been emailed to you")
    {
      setCookie("jcEmailSucc", "<span class='jc-email-succ'>" . $jc_The_Email_Message . "</span>", time() + 5);
      header('location: forgot_password.php');
    }
    else
    {
      setCookie("jcEmailErr", "<span class='jc-email-err jc-forgot-err''>" . $jc_The_Email_Message . "</span>", time() + 5);
      header('location: forgot_password.php');
    }
  }  
}
