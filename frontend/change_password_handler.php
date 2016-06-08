<?php

// Get database connection
require_once('../bootstrap.php');

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
  setcookie("matchErr","<span class='jc-match-err jc-pass-err''>Passwords must match!</span>",time() + 5);
  header('Location: change_password.php');
}

// Check for empty values
if ( $_POST['password'] === "" || $_POST['password_confirm'] === "")
{
  setcookie("emptyErr","<span class='jc-req-err jc-pass-err''>*Required. </span>",time() + 5);
  header('Location: change_password.php');
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