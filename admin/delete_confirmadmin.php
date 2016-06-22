<?php 
/*
Coded By:Loveleen Anand
*/
include( '../bootstrap.php' );

  $db = Database::getDB();
  $studentId = $_POST['student_id'];
  $today = date('Y-m-d H:i:s') ;
  $query = "UPDATE students SET deleted_at = '$today' WHERE id = '$studentId' ";
//$query = "DELETE FROM students WHERE id = '$studentId' ";
    
  $db->exec($query);
  
// display the Product List page
  header('location: managestudentadmin.php');
 
  ?>