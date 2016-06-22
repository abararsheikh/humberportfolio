<?php
// Get the product data
echo "hi";
include('bootstrap.php');
$firstname = $_POST['user_fname'];
$lastname = $_POST['user_lname'];
$email = $_POST['user_email'];

// Validate inputs
if (empty($firstname) || empty($lastname) || empty($email) )
{
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    // If valid, add the product to the database
   $db = Database::getDB();
    $query = "INSERT INTO students(first_name, last_name, email) VALUES ('$firstname', '$lastname', '$email')";
    $db->exec($query);

    // Display the Product List page
    header('location: index_account.php');
}
?>