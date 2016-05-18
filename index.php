<?php

<<<<<<< HEAD
echo 'gfdsgfdaa';


?>
<h1>
  My test
</h1>
=======
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
>>>>>>> 3045b85beed5b5c8f8e097f8937dceab51a20948
