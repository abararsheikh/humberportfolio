<?php
require_once('bootstrap.php');
// Get IDs
$id = $_POST['id'];
$db = Database::getDB();
// Delete the product from the database

$query = "DELETE FROM projects
          WHERE id = '$id'";
$db->exec($query);

// display the Product List page
header('location: index_project.php');
?>