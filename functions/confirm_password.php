<?php
function confirm_password ($password, $confirmation){
  if ($password <> $confirmation){
    return false;
  }
  else{
    return true;
  }
}
