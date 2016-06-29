<?php

/*
Coded By:Abarar Sheikh
*/

    include('bootstrap.php' );
      //connect to databse  
    $db = Database::getDB();
    $project_id = $_GET['project_id'];

    $query = "DELETE FROM projects
              WHERE id = $project_id ";
    $db->exec($query);

    //delete image 
    $query = "DELETE FROM images
              WHERE projects_id = $project_id ";
    $db->exec($query);
    // display the Product List page
    header('location: student_profile.php');
?>