<?php

include( '../bootstrap.php' );
$db = Database::getDB();
  $studentId = $_POST['student_id'];
//echo $studentId;
 
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$classid = $_POST['classid'];
$website_link = $_POST['website_link'];
$Bio = $_POST['Bio'];
$social_media = $_POST['social_media'];
// Image
$fp=addslashes(file_get_contents($_FILES['uploadedimage']['tmp_name'])); //will store the image to fp

//Documents folder, should exist in your host in there you're going to save the file just uploaded



if(empty($firstname)||empty($lastname)||empty($email) ||empty($password)||empty($website_link)||empty($Bio)||empty($social_media))
{
  
     $error = "Please Fill all the fields and try again";
    echo $error."<br/>";
    echo "<a href='createstudentadmin.php'>Go Back</a>";
}
else
{
  echo "in editing mode";
}
?>