<?php

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

