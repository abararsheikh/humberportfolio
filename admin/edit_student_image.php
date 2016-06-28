<?php
/*
Coded By:BIN LIU
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
 
if(isset($_POST['Submit'])){
 
   $db = Database::getDB();
  $studentId = $_POST['id'];
 
  $id=$_POST['id'];
  $alt=$_POST['alt'];
  $updated_at=date("Y-m-d H:i:s");
  $projects_id=$_POST['projects_id'];
  $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
   $sqlq = "UPDATE images SET id = '$id', alt = '$alt', 
   projects_id='$projects_id',updated_at='$updated_at',image='$image' WHERE id='$id'";

 $db->exec($sqlq);
 

}else{
    $db = Database::getDB();
  $studentId = $_POST['id'];
  $sql = "SELECT * FROM images WHERE id = '$studentId'";
  $result = $db->query($sql);
  $editimage = $result->fetch();
  
}


 header('location: managestudentadmin.php');
 

?>
<form action="edit_student_image.php" method="post" enctype="multipart/form-data" >
  <input type="hidden" name="student_id" value="<?php echo $studentId; ?>">
    <label >id: </label>
  <input type="text" name="id" value="<?php echo $editimage['id'];?>"/><br/>
  
  <label >alt: </label>
  <input type="text" name="alt" value="<?php echo $editimage['alt'];?>"/><br/>
  
  <label >projects_id: </label>
  <input type="text" name="projects_id" value="<?php echo $editimage['projects_id']; ?>"/><br/>
  
 
  <?php
  echo '<img src="data:image/jpeg;base64,'.base64_encode( $editimage['image'] ).'" style="width:200px;height:200px;"/>';
  ?>
  <br/>
  <label>Image: </label>
  <input name="image" type="file">
  <br/>
 


 
  
    <table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td height="40">
                <div align="center">
                    <span class="style1">
        <form action="" method="post">
                      <input name="Submit" type="submit" id="Submit" value="modify"/>
        <a href="managestudent_image.php" style="background-color: #0000fa">Go Back to Reult</a>
        </form>
                     </span>
                </div>
            </td>
        </tr>
    </table></form>

<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>