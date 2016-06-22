<?php
// Get IDs
$id = $_POST['id'];
$db = Database::getDB();
// Delete the product from the database
require_once('bootstrap.php');
$query = "DELETE FROM students
          WHERE id = '$id'";
$db->exec($query);

// display the Product List page
header('location: index_account.php');
?>