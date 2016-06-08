<?php

// Get database connection
require_once('../bootstrap.php');

// Update the password on form submission
if( isset( $_POST['submit'] ) )
{
  // Make sure both password fields match
  if ( $_POST['password'] === $_POST['password_confirm'] )
  {
    $err = "";
    $id = $_SESSION['student_id'];
    $password = $_POST['password'];
    change_password( $id, $password);
  }
  else
  {
    $err = "Passwords do not match!";
  }
}

function change_password ($id, $password) 
{
  $db = Database::getDB(); 
  $query = "UPDATE students
              SET password = :password
              WHERE id = :id";

  $statement = $db->prepare($query);
  $statement->bindParam(':id', $id, PDO::PARAM_INT, 10);
  $statement->bindParam(':password', $password, PDO::PARAM_STR, 100);

  $statement->execute();
}