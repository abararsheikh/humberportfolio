<?php

/*
Gul Rabbi
*/
include( '../../bootstrap.php' );




include DIR_BASE . 'admin/public_header.view.php';

?>

<?php
  $db = Database::getDB();
  $classId = $_POST['class_id'];
  $sql = "SELECT * FROM classes WHERE id = '$classId'";
  $result = $db->query($sql);
  $editclass = $result->fetch();
?>
<form action="updateclass.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="class_id" value="<?php echo $classId; ?>">
  <label for 'name'>Name: </label>
  <input type="text" name="name" value="<?php echo $editclass['name'];?>"/><br/>
  
  <label for 'from'>From: </label>
  <input type="text" name="from" value="<?php echo $editclass['from']; ?>"/><br/>
  
  <label for 'to'>To: </label>
  <input type="text" name="to" value="<?php echo $editclass['to']; ?>" /><br/>
 
  <label>&nbsp;</label>
    <input type="submit" name="updateclass" value="Update Student Record" />
    <br />
</form>
  <a href="index.php">Go Back</a>
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>