<?php
//returns email error

function valid_email($email) 
{
  $emailErr = '';
  if (empty($email)) {
    $emailErr = "Email is required";
  } else {
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }  
  return $emailErr;
}