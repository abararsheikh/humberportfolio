<?php
/*Confirms that the new password and password confirmation matches besfore going ahead to save on the database.
/@param string $password
/@param string $confirmation
*/
function confirm_password ($password, $confirmation){
  
  // if password does not match the confirm password entry
  if ($password <> $confirmation){
    return false;
  }
  
  // if password matches the confirm password entry
  else{
    return true;
  }
  
}

