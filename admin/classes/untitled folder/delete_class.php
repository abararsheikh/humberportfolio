<?php

/*
Coded By:Loveleen Anand
*/
include( '../../bootstrap.php' );


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
  $studentId = $_POST['student_id'];
  ?>
<div>
  <h1>  Are you sure you want to delete?  </h1>
  <form method="post" action="delete_confirmadmin.php" style="float:left;margin-right:30px;">
     <input type="hidden" name="student_id" value="<?php echo $studentId; ?>" />
    <button type="submit" class="btn btn-info"><i class="fa fa-check" style="padding-right:10px;"></i>Yes</button>
  </form>
   <form method="post" action="managestudentadmin.php" style="float:left;">
    <button type="submit" class="btn btn-info"><i class="fa fa-times" style="padding-right:10px;"></i>No</button>
  </form>
</div>

<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>