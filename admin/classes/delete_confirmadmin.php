<?php 

/*
Gul Rabbi
*/
include( '../../bootstrap.php' );

  $db = Database::getDB();
  $classId = $_POST['class_id'];

  $today = date('Y-m-d H:i:s') ;

  $query = "UPDATE classes SET deleted_at = '$today' WHERE id = '$classId' ";
    
  $db->exec($query);
  
  header('location: index.php');
 
  ?>