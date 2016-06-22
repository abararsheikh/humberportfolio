<?php

//get database connection
require_once('../bootstrap.php');

$projects_id = $_POST['projects_id'];

//delete the project
if ( isset( $_POST['delete'] ) )
{
  delete($projects_id);
}

function delete ($projects_id) 
{
  $db = Database::getDB(); 
  
  //delete project info
  $query = "DELETE from projects
              WHERE id = :id";

  $statement = $db->prepare($query);
  $statement->bindParam(':id', $projects_id, PDO::PARAM_INT, 11);
  $statement->execute();
  
  //delete project image
  $query = "DELETE from images
              WHERE projects_id = :id";

  $statement = $db->prepare($query);
  $statement->bindParam(':id', $projects_id, PDO::PARAM_INT, 11);
  $statement->execute();
  
}