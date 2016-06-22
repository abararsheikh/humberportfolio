<?php

include( 'bootstrap.php' );
include "./frontend/login.php";

/*$query = 'SELECT *
=======
/*
$query = 'SELECT *
>>>>>>> 1a22038fb8f0d84beed0f5b143f18425a62539cd
  FROM test';
$result = mysql_query( $query, $connect ) or die( mysql_error() );

while( $record = mysql_fetch_assoc( $result ) )
{
  
  echo '<pre>';
   print_r( $record );
  //echo $record['name'];
  echo '</pre>';
  
<<<<<<< HEAD
}*/

?>

<html>
  <head>
    <title>Humber Portfolio App</title>
  </head>
  <body>
    
    <h1>
      Welcome to Portfolio Tool
    </h1>
    <form method="post" action="">   

        <div>
            <label for="email">Email:</label>
            <input type="text" name="email" placeholder="Email Address" maxlength="100">
        </div>
        <div class="form-row">
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Password" maxlength="100">
        </div>      
        <div class="login-button">
            <input type="submit" name="submit" value="Login" title="Login now">
        </div>
      
      <p style="color:red">
          <?php
            if(isset($error))
            {              
                echo $error;
            }
       ?>
      </p>
       

    </form>
    <p>
      <?php echo random_string(); ?>
    </p>
    
    <p>
      Footer | Copyright 2016
    </p>
    
  </body>
</html>
