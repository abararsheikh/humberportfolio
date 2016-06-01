<?php

//This function accepts a user's email as a parameter, and calls the mailer function to retireve the user's password
//After calling the mailer function, send_password will return a user message that can be implemented on a results page.

function send_password ($email_parameter, $type_parameter){
  //generate new random character string for password
  require_once('strings.php');
  $new_password = random_string();
  $message_out = '';
  
  //replace user's password in database
  if($type_parameter === 'admin'){
    //replace password for administrator
    try {
      $db = DB_connection::getDB();
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $update_statement = "UPDATE administratos SET password := :new_password WHERE email = :email_parameter";
      $prepared = $db->prepare($update_statement);

      $prepared->bindParam(':email_parameter', $email_parameter);
      $prepared->bindParam(':new_password', $new_password); 
      $prepared->execute();
      
      $message_out = 'Your password has been reset, please check your email for instructions.'
    }
    //catch and return errors
    catch (PDOException $e){
      $message_out = $e->getMessage();//This value only for debugging, and will be changed to a more user-friendly error later
    }
  }
  elseif($type_parameter === 'student'){
    //replace password for student
  }

  //email new password to user - call Zarna's function
  //return message to front end for results page
}