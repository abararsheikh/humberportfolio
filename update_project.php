<?php
/*
Coded By:Abarar Sheikh
*/

 include('bootstrap.php' );
  //connect to databse  
 $db = Database::getDB();
// Get the value from the form
$project_id = $_POST['project_id'];
$projectName = $_POST['projectName'];
$projectDesc = $_POST['projectDesc'];
$projectTool = $_POST['projectTool'];
$projectKey = $_POST['projectKey'];

// ====Get the Image
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

// Validate inputs
if (empty($projectName) || empty($projectDesc) || empty($projectTool) || empty($projectKey) || empty($image)) {
    $error = "Invalid Project data. Check all fields and try again.";
    echo $error;
} else {
    // If valid, update the project data to the database

    $query = "UPDATE projects SET name ='$projectName',description='$projectDesc',tools ='$projectTool',keywords='$projectKey' WHERE id = $project_id";
    $db->exec($query);
  //Update image
    $query2 = "UPDATE images SET image ='$image' WHERE projects_id = $project_id";
    $db->exec($query2);
    // Display the Movie List page
    header("location: project_profile.php?project_id=$project_id");
}