<?php

/*
Coded By:Abarar Sheikh
*/

include( 'bootstrap.php' );
include "login.php";
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Humber Portfolio Student login form</title>
    <link rel="stylesheet" href="frontend/css/reset.css">
        <link rel="stylesheet" href="frontend/css/login.css">    
  </head>

  <body>

  <div class="container">
  <div class="login">
  	<h1 class="login-heading">
      <strong>Welcome.</strong> Please login.</h1>
      <form method="post"  action="">
        <input type="text" name="email" placeholder="Email" required="required" class="input-txt" />
          <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          <div class="login-footer">
             <a href="forgot_password.php" class="lnk">
              <span class="icon icon--min">ಠ╭╮ಠ</span> 
              Forgot Password
              </a>
            <button type="submit" class="btn btn--right" name="submit">Login </button>
    
          </div>          
      </form>    
  </div>
        <p style="color:red;font-size:18px;font-family: courier;">
            <?php
              if(isset($error))
              {              
                  echo $error;
              }
           ?>
          </p>
</div>
    
        <script src="frontend/scripts/login.js"></script>