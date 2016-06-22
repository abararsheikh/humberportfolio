<?php
// Get the product data
echo "hi";
include('bootstrap.php');
$projectname = $_POST['project_name'];
$description = $_POST['description'];
$link = $_POST['link'];

// Validate inputs
if (empty($projectname) || empty($description) || empty($link) )
{
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    // If valid, add the product to the database
   $db = Database::getDB();
    $query = "INSERT INTO projects(name, description, keywords) VALUES ('$projectname', '$description', '$link')";
    $db->exec($query);

    // Display the Product List page
    header('location: index_project.php');
}
?>