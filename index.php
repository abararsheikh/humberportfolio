<?php

include( 'bootstrap.php' );
include "./frontend/login.php";

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