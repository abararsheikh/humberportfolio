<?php

// Get database connection
require_once('bootstrap.php');

// Update the password on form submission
if(isset($_POST['submit']))
{
  // Make sure both password fields match
  if ( $_POST['firstname'] === $_POST['firstname_confirm'])
  {
    $err = "";
    $id = $_SESSION['user_id'];
    $password = $_POST['firstname'];
    change_firstname($id, $firstname);
  }
  else
  {
    $err = "Passwords do not match!";
  }
}

function change_firstname ($id, $password) 
{
  $db = Dbclass::getDB();
  $query = "UPDATE students
              SET firstname = :firstname,
              WHERE id = :id ";

  $statement = $db->prepare($query);
  $statement->bindParam(':id', $id, PDO::PARAM_INT, 10);
  $statement->bindParam(':firstname', $firstname, PDO::PARAM_STR, 100);

  $statement->execute();
}