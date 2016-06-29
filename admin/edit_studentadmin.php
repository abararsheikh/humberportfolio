<?php

/*
Coded By:Loveleen Anand
*/
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
<form action="updatestudent.php" method="post" enctype="multipart/form-data" class="container form-horizontal">
  <input type="hidden" name="student_id" value="<?php echo $studentId; ?>">
  <div class="form-group">
    <label class="col-sm-2" for 'first_name'>First Name: </label>
    <div class="col-sm-3">
        <input type="text" name="first_name" value="<?php echo $editstudent['first_name'];?>" class="form-control"/><br/>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-2" for 'last_name'>Last Name: </label>
    <div class="col-sm-3">
        <input type="text" name="last_name" value="<?php echo $editstudent['last_name']; ?>" class="form-control"/><br/>
    </div>
  </div>
  
  <div class="form-group">
      <label class="col-sm-2" for 'email'>Email: </label>
    <div class="col-sm-3">
    <input type="text" name="email" value="<?php echo $editstudent['email']; ?>" class="form-control"/><br/>
    </div>
  </div>
  
  <div class="form-group">
      <label class="col-sm-2" for 'password'>Password: </label>
    <div class="col-sm-3">
        <input type="password" name="password" value="<?php echo $editstudent['password']; ?>" class="form-control"/><br/>
    </div>
  </div>
  
  <div class="form-group">
      <label class="col-sm-2" for='classId'>Class ID:</label>
    <div class="col-sm-3">
        <input type="text" name="classid" value="<?php echo $editstudent['classes_id']; ?>" class="form-control"/><br/>
    </div>
  </div>
  
  <div class="form-group">
      <label class="col-sm-2" for 'website_link'>Website Link: </label>
  <div class="col-sm-3">
      <input type="text" name="website_link" value="<?php echo $editstudent['website_link']; ?>" class="form-control"/><br/>
    </div>
  </div>
  
  <div class="form-group">
      <label class="col-sm-2" for 'bio'>Bio: </label>
      <div class="col-sm-3">
          <input type="text" name="Bio" value="<?php echo $editstudent['bio']; ?>" class="form-control"/> <br/>
    </div>
  </div>
  
  <div class="form-group">
      <label class="col-sm-2" for 'social_media'>Social Media: </label>
      <div class="col-sm-3">
          <input type="text" name="social_media" value="<?php echo $editstudent['social_media'] ?>" class="form-control"/><br/>
    </div>
  </div>
  <?php
  echo '<img src="data:image/jpeg;base64,'.base64_encode( $editstudent['image'] ).'" style="width:200px;height:200px;" class="col-sm-offset-2"/>';
  ?>
  <br/>
  <div class="form-group">
      <label class="col-sm-2" for 'image'>Image: </label>
<div class="col-sm-3">
    <input name="uploadedimage" type="file" class="form-control">
    </div>
  </div>
  <div class="form-group">
      <label class="col-sm-2">&nbsp;</label>
      <div class="col-sm-3">
            <input type="submit" name="updatestudent" value="Update Student Record" class="btn btn-primary"/>
    </div>
  </div>
    <br />
</form>
  <a href="managestudentadmin.php" role="button" class="btn btn-primary col-sm-offset-2">Go Back</a>
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>