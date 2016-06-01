<?php
//include( 'bootstrap.php' ); //This file is incuded to start the session 
if(isset($_POST['submit']))
{  
echo "Hello" ."<br/>";
    if (isset($_POST['email']) && isset($_POST['password'])) 
    {
      $email = $_POST['email'];
      $password = $_POST['password'];
      //connect to databse  
      echo $email ."<br/>";
      echo $password;
      $row = $query->exec("select id,email,password from users where email = $email");
      //If the user record was found, compare the password on record to the one provided hashed as necessary.

      if($row !== false)
      {
        if($row['password']==hash('sha256',$password))
        {
           // is_auth is  we will test this to make sure they can view other pages// that are needing credentials.
          $_SESSION['is_auth'] = true;
          $_SESSION['user_id'] = $row['id'];
          //$_SESSION['name'] = $row['name'];
          // Once the sessions variables have been set, redirect them to the landing page / home page.
          header('location: index.php');
          exit;                    

        }
        else
        {
           $error = "Invalid email or password. Please try again.";
        }
        
      }
       else 
       {
         $error = "Invalid email or password. Please try again.";
       }

    }
    else
    {
      $error = "Please enter an email and password to login.";
    }
}
?>