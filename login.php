<?php
//include('../bootstrap.php' ); //This file is incuded to start the session and for DB connection
//session_start();//session starts here  
if(isset($_POST['submit']))
{  
    if (isset($_POST['email']) && isset($_POST['password'])) 
    {
      $email = $_POST['email'];
      $password = $_POST['password'];
      //connect to databse  
      $db = Database::getDB();
     // $query="SELECT id,email,password from students where email = '$email'";
      $query="SELECT * from students where email = '$email' AND password = '$password'";
      $result= $db->prepare($query);
      $result->execute();
      $count=$result->rowCount();
      $row = $result->fetch();
      $result->closeCursor();
//      var_dump($row);
         
      //If the user record was found, compare the password on record to the one provided hashed as necessary.

      if($row !== false)
      {
      //  if($row['password']==hash('sha256',$password))
      //  {
           // is_auth is  we will test this to make sure they can view other pages// that are needing credentials.
          $_SESSION['is_auth'] = true;
          $_SESSION['student_id'] = $row['id'];
        
          $_SESSION['student_firstname'] = $row['first_name'];
          // Once the sessions variables have been set, redirect them to the landing page / home page.
          header('location:student_profile.php');
        
          exit;                    

    //    }
        //else
      //  {
      //     $error = "Invalid email or password. Please try again.";
     //   }
        
      }    
      else if(empty($_POST['email']) || empty($_POST['password']))
      {
        $error = "Please enter an email and password to login. !";
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