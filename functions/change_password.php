<?php


/**
 * This function is to change password. We should type our email address and new password. 
 * After that we connect to DB and find email address we typed and update the password.
 * If everything is OK, we get successful message. It we have an error, we get an error message.
 * @param string $email_parameter email address
 * @param string $password_parameter new password
 * @param string $type_parameter table name (administrators or students)
 * @return string successful message or error message
*/
function change_password($email_parameter, $password_parameter, $type_parameter)
{
  
  if($type_parameter === 'admin')
  {
    //replace password for administrator
    $table = 'administrators';
  }
  else
  {
    //replace password for student
    $table = 'students';
  }
  
  try
  {
 
    $db = Database::getDB();
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $update_statement = "UPDATE $table SET password := :password_parameter WHERE email = :email_parameter";
    $prepared = $db->prepare($update_statement);

  $prepared->bindParam(':email_parameter', $email_parameter);
  $prepared->bindParam(':password_parameter', $password_parameter); 
  $prepared->execute();
    
  }
  
  //catch and return errors
  catch (PDOException $e)
  {
    return $e->getMessage(); //This value only for debugging, and will be changed to a more user-friendly error later
  }
  
}
