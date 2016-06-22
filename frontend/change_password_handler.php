<?php


/*
* Change password handler: established databse connection and ensure that the selected new password and confirm password matches. Finds the student $id in the students table on the databse.
@param string $password
*@param string $password_confirm
*@param int $student_id 
*@param int $id
*/

// Get database connection
require_once('../bootstrap.php');

// Make sure both password fields match
if ( $_POST['password'] === $_POST['password_confirm'] )
{
  $err = "";
  $id = $_SESSION['student_id'];
  $password = $_POST['password'];
  change_password( $id, $password);
  setCookie("jcPassSucc", "<span class='jc-pass-succ'>Password reset successful!</span>", time() + 5);
  header('Location: change_password.php');
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

<<<<<<< HEAD
/**
 * This is a comment from Test Group
*/
function change_password ($id, $password) 
=======
/*
*Once the new password and confirm password matched, uses the student id to to update the student password in the database.
*@param int $id
*@param string $db
*@param string $password
*@param string $query
*/

function jc_change_password ($id, $password)
>>>>>>> 6de74deb9300c7f1e339aa800b9556d8b2842b08
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