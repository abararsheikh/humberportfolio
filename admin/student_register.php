<?php

include( '../bootstrap.php' );
$db = Database::getDB();

//Custom Css
$admin_custom_css = array(
  //eg. '/admin/asset/my.css'

);

//Custom js
$admin_custom_js = array(
  //eg. '/admin/asset/my.js'

);

include DIR_BASE . 'admin/public_header.view.php';

?>
<?php
 
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
  $db = Database::getDB();
    // If valid, Add the student record to the database
    $query = "INSERT INTO students(first_name, last_name, email, password, classes_id, website_link, bio, social_media, image) 
    VALUES ('$firstname','$lastname','$email','$password','$classid','$website_link','$Bio','$social_media', '$fp')";
    $db->exec($query);
    
    // Display the student list page
    header('location: managestudentadmin.php');
}
?>
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>