<?php

// Comemnt....
function random_string( $length = 8 )
{
  
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $random_string = '';
  
  for( $i = 0; $i < $length; $i++ )
  {
    
    $random_string .= $characters[rand( 0, strlen( $characters ) )];
  
  }
  
  return $random_string;
  
}
