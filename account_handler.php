<?php

// Get database connection
require_once('bootstrap.php');

// Update the firstname on form submission
if(isset($_POST['submit']))
{
  // Make sure both firstname fields match
  if ( $_POST['firstname'] === $_POST['firstname_confirm'])
  {
    $err = "";
    $id = $_SESSION['user_id'];
    $password = $_POST['firstname'];
    change_firstname($id, $firstname);
  }
  else
  {
    $err = "First names do not match!";
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


// Update the firstname on form submission
if(isset($_POST['submit']))
{
  // Make sure both firstname fields match
  if ( $_POST['lastname'] === $_POST['lastname_confirm'])
  {
    $err = "";
    $id = $_SESSION['user_id'];
    $password = $_POST['lastname'];
    change_firstname($id, $lastname);
  }
  else
  {
    $err = "Last name do not match!";
  }
}

function change_firstname ($id, $lastname) 
{
  $db = Dbclass::getDB();
  $query = "UPDATE students
              SET lastname = :lastname,
              WHERE id = :id ";

  $statement = $db->prepare($query);
  $statement->bindParam(':id', $id, PDO::PARAM_INT, 10);
  $statement->bindParam(':lastname', $lastname, PDO::PARAM_STR, 100);

  $statement->execute();
}


// Update the email on form submission
if(isset($_POST['submit']))
{
  // Make sure both email fields match
  if ( $_POST['email'] === $_POST['email_confirm'])
  {
    $err = "";
    $id = $_SESSION['user_id'];
    $password = $_POST['email'];
    change_firstname($id, $email);
  }
  else
  {
    $err = "Last name do not match!";
  }
}

function change_firstname ($id, $email) 
{
  $db = Dbclass::getDB();
  $query = "UPDATE students
              SET email = :email,
              WHERE id = :id ";

  $statement = $db->prepare($query);
  $statement->bindParam(':id', $id, PDO::PARAM_INT, 10);
  $statement->bindParam(':email', $email, PDO::PARAM_STR, 100);

  $statement->execute();
}