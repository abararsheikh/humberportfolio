<?php
/*
Gul Rabbi
*/
include( '../../bootstrap.php' );

$db = Database::getDB();
$classId = $_POST['class_id'];
//echo $classId;


$name = $_POST['name'];
$from = $_POST['from'];
$to = $_POST['to'];

$today = date('Y-m-d H:i:s') ;

if(empty($name)||empty($from)||empty($to))
{
  
    $error = "Please Fill all the fields and try again";
    echo $error."<br/>";
    echo "<a href='createclassadmin.php'>Go Back</a>";
}
else
{
   $query = "UPDATE classes SET name = '$name', from = '$from', to = '$to' WHERE id='$classId'";
      $db->exec($query);
    header('location: index.php');
}
 
?>