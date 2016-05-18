<?php

include( 'bootstrap.php' );

$query = 'SELECT *
  FROM test';
$result = mysql_query( $query, $connect ) or die( mysql_error() );

while( $record = mysql_fetch_assoc( $result ) )
{
  
  echo '<pre>';
  print_r( $record );
  echo '</pre>';
  
}
