<?php

//This function accepts a user's email as a parameter, and calls the mailer function to retireve the user's password
//After calling the mailer function, send_password will return a user message that can be implemented on a results page.

function forgot_password ($email_parameter, $type_parameter){
  //generate new random character string for password
  $new_password = random_string();
  
  //replace user's password in database
  $client_message = change_password($email_parameter, $new_password, $type_parameter);
  $client_message .= ' - please check your email for instructions.';
  
  //email new password to user
  $email_subject = 'Password Reset';
  $email_message = "
  <html>
  <head>
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Password Reset</title>
  <body>
    <h1>Your Password has been reset</h1>
    <p>Please follow the link below to access your account by typing in the new password provided</p>
    <h2>$new_password</h2>
    <a href='#'>Login to your account</a>
  </body>
  </html>";
  
  send_email($email_parameter,$email_subject,$email_message);
  
  //return message to front end for results page
  return $client_message;
}