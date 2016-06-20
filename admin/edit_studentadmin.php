<?php

include( '../bootstrap.php' );


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
  $db = Database::getDB();
  $studentId = $_POST['student_id'];
  $sql = "SELECT * FROM students WHERE id = '$studentId'";
  $result = $db->query($sql);
  $editstudent = $result->fetch();
 // var_dump($editstudent);
?>
<form action="updatestudent.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="student_id" value="<?php echo $studentId; ?>">
  <label for 'first_name'>First Name: </label>
  <input type="text" name="first_name" value="<?php echo $editstudent['first_name'];?>"/><br/>
  
  <label for 'last_name'>Last Name: </label>
  <input type="text" name="last_name" value="<?php echo $editstudent['last_name']; ?>"/><br/>
  
  <label for 'email'>Email: </label>
  <input type="text" name="email" value="<?php echo $editstudent['email']; ?>" /><br/>
  
  <label for 'password'>Password: </label>
  <input type="password" name="password" value="<?php echo $editstudent['password']; ?>"/><br/>
  
  <label for='classId'>Class ID:</label>
  <input type="text" name="classid" value="<?php echo $editstudent['classes_id']; ?>"/><br/>
  
  <label for 'website_link'>Website Link: </label>
  <input type="text" name="website_link" value="<?php echo $editstudent['website_link']; ?>" /><br/>
  
  <label for 'bio'>Bio: </label>
  <input type="text" name="Bio" value="<?php echo $editstudent['bio']; ?>"/> <br/>
  
  <label for 'social_media'>Social Media: </label>
  <input type="text" name="social_media" value="<?php echo $editstudent['social_media'] ?>"/><br/>
  <?php
  echo '<img src="data:image/jpeg;base64,'.base64_encode( $editstudent['image'] ).'" style="width:200px;height:200px;"/>';
  ?>
  <br/>
  <label for 'image'>Image: </label>
  <input name="uploadedimage" type="file">
  <br/>
  <label>&nbsp;</label>
    <input type="submit" name="updatestudent" value="Update Student Record" />
    <br />
</form>
  <a href="managestudentadmin.php">Go Back</a>
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>