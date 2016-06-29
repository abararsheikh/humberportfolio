<?php

/*
Gul Rabbi
*/

include( '../../bootstrap.php' );
$db = Database::getDB();


$name = $_POST['name'];
$from = $_POST['from'];
$to = $_POST['to'];




if(empty($name)||empty($from)||empty($to))
{
  
     $error = "Please Fill all the fields and try again";
    echo $error."<br/>";
    echo "<a href='add_class.php'>Go Back</a>";
}
else
{
  $db = Database::getDB();
    $query = "INSERT INTO classes(name, from, to) 
    VALUES ('$name','$from','$to')";
    $db->exec($query);
    
    // Display the student list page
    header('location: index.php');
}

?>