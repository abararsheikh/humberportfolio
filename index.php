<?php

include( 'bootstrap.php' );

/*
$query = 'SELECT *
  FROM test';
$result = mysql_query( $query, $connect ) or die( mysql_error() );

while( $record = mysql_fetch_assoc( $result ) )
{
  
  echo '<pre>';
   print_r( $record );
  //echo $record['name'];
  echo '</pre>';
  
}
*/

?>

<html>
  <head>
    <title>Humber Portfolio App</title>
  </head>
  <body>
    
    <h1>
      Welcome to Portfolio Tool
    </h1>
  
    <p>
      Click here to Login    <a href="login_form.php"> <button> Login </button></a>
      
    </a>  
    <p>
      <?php echo random_string(); ?>
    </p>
    
    <p>
      Footer | Copyright 2016
    </p>
    
  </body>
</html>
