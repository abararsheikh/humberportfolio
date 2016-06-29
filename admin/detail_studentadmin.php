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
//echo $studentId;
 
$firstname = $editstudent['first_name'];
$lastname = $editstudent['last_name'];
$email = $editstudent['email'];
$classid = $editstudent['classes_id'];
$website_link = $editstudent['website_link'];
$Bio = $editstudent['bio'];
$social_media = $editstudent['social_media'];
// Image
//$fp=addslashes(file_get_contents($_FILES['uploadedimage']['tmp_name'])); //will store the image to fp
?>
<h2>
  Details For <?php echo $firstname; ?>
</h2>
<table class="table">
  <tr>
   <td>ID:</td>
    <td><?php echo $studentId;?></td>
  </tr>
  <tr>
   <td>First Name:</td>
    <td><?php echo $firstname;?></td>
  </tr>
  <tr>
   <td>Last Name:</td>
    <td><?php echo $lastname;?></td>
  </tr>
  <tr>
   <td>Email:</td>
    <td><?php echo $email;?></td>
  </tr>
  <tr>
   <td>Class ID:</td>
    <td><?php echo $classid;?></td>
  </tr>
  <tr>
   <td>Bio:</td>
    <td><?php echo $Bio;?></td>
  </tr>
  <tr>
   <td>Social Media:</td>
    <td><?php echo $social_media;?></td>
  </tr>
  <tr>
   <td>Student Image:</td>
       <td>
    <?php
       echo '<img src="data:image/jpeg;base64,'.base64_encode( $editstudent['image'] ).'" style="width:200px;height:200px;"/>';
      ?>
    </td>
  </tr>
</table>
<h2>
  Project Details for <?php echo $firstname; ?>
</h2>
    <?php
 $studentId = $_POST['student_id'];
$sql_Projects = "SELECT * FROM projects where students_id='$studentId'";
 $statement = $db->prepare($sql_Projects);
$statement->execute();
$resultProjects = $statement->fetchAll();
$statement->closeCursor();
?>

<table class="table">
  <thead>
  <tr>
      <td>Project Name</td>
  <td>Created on</td>
  <td>Last Updated</td>
  <td>Project Description</td>
  <td>Tools Used</td>
    </tr>
  </thead>
  
    <?php foreach($resultProjects as $res):?>
   <tr>
    <td><?php echo $res['name'];?></td>
         <td><?php echo $res['created_at']; ?></td>
    <td><?php echo $res['updated_at']; ?></td>
    <td>    <?php echo $res['description']; ?>    </td>
       <td>    <?php echo $res['tools']; ?>    </td>
  </tr>
  <?php endforeach; ?> 
 
</table>
  <a href="managestudentadmin.php" role="button" class="btn btn-primary">Go Back</a>
  <form method="post" action="projectViews/addProjectForm.php" style="display:inline-block;">
  <input type="hidden" name="studentid" value="<?php echo $studentId; ?>"/>
    <input type="hidden" name="firstname" value="<?php echo $firstname;?>"/>
        <input type="hidden" name="lastname" value="<?php echo $lastname;?>"/>
    <input type="submit" name="addProject" value="Add New Project" class="btn btn-primary"/>
  </form>
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>