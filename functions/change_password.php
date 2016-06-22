<?php

function change_password($email_parameter, $password_parameter, $type_parameter){
  
  if($type_parameter === 'admin'){
    //replace password for administrator
    $table = 'administrators';
  }
  else{
    //replace password for student
    $table = 'students';
  }
  
  try {
 
  $db = Database::getDB();
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $update_statement = "UPDATE $table SET password := :password_parameter WHERE email = :email_parameter";
  $prepared = $db->prepare($update_statement);

  $prepared->bindParam(':email_parameter', $email_parameter);
  $prepared->bindParam(':password_parameter', $password_parameter); 
  $prepared->execute();
    
  }
  
  //catch and return errors
  catch (PDOException $e){
    return $e->getMessage(); //This value only for debugging, and will be changed to a more user-friendly error later
  }
  
}
