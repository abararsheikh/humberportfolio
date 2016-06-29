<?php

/*
Gul Rabbi
*/
include( '../../bootstrap.php' );




include DIR_BASE . 'admin/public_header.view.php';

?>
 <?php 

$db = Database::getDB();
$classId = $_POST['class_id'];  ?>
<div>
  <h1>  Are you sure you want to delete?  </h1>
  <form method="post" action="delete_confirmadmin.php" style="float:left;margin-right:30px;">
     <input type="hidden" name="class_id" value="<?php echo $classId; ?>" />
    <button type="submit" class="btn btn-info"><i class="fa fa-check" style="padding-right:10px;"></i>Yes</button>
  </form>
   <form method="post" action="index.php" style="float:left;">
    <button type="submit" class="btn btn-info"><i class="fa fa-times" style="padding-right:10px;"></i>No</button>
  </form>
</div>

<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>