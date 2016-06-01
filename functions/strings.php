<?php

// Comemnt....
function random_string( $length = 8 )
{
  
  $characters = '0123456789abcdefghijkBClmnopqrstuvwxyzADEFGHIJKLMNOPQRSTUVWXYZ';
  $random_string = '';
  
  for( $i = 0; $i < $length; $i++ )
  {
    
    $random_string .= $characters[rand( 0, strlen( $characters ) - 1 )];
  
  }
  
  return $random_string;
  
}
