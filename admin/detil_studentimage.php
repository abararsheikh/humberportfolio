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
$db = Database::getDB();
 $studentId = $_POST['id'];
  $sql = "SELECT * FROM images WHERE id = '$studentId'";
  $result = $db->query($sql);
  $editimage = $result->fetch();
  
  
$id = $editimage['id'];
$alt = $editimage['alt'];
$projects_id = $editimage['projects_id'];
$updated_at = $editimage['updated_at'];
$deleted_at = $editimage['deleted_at'];
$created_at = $editimage['created_at'];

$image=addslashes(file_get_contents($_FILES['uploadedimage']['tmp_name']));
?>
	
 <table class="table table-striped table-bordered table-responsive">
	 <H1 align="center">Detial student_image</H1>
	
  <tr class="title_top">

        <td width="20%"><div align="center">id</div></td>
        <td width="20%"><div align="center">alt</div></td>
        <td width="20%"><div align="center">projects_id</div></td>
        <td width="20%"><div align="center">updated_at</div></td>
        <td width="20%"><div align="center">deleted_at</div></td>
        <td width="20%"><div align="center">created_at</div></td>
        <td width="20%"><div align="center">images</div></td>


    </tr>
   <tr class="tdbg">
        <td><div align="center"><?php echo $id;?></div></td>
        <td><div align="center"><?php echo $alt;?></div></td>
	       <td><div align="center"><?php echo $projects_id;?></div></td>
        <td><div align="center"><?php echo $updated_at;?></div></td>
        <td><div align="center"><?php echo $deleted_at;?></div></td>
        <td><div align="center"><?php echo $created_at;?></div></td>
        <td  width="20%"><?php
           echo '<img src="data:image/jpeg;base64,'.base64_encode( $editimage['image'] ).'"/>';
          ?></td>
	  
		
        <td>

		</td>
		
</tr>

  </tr>
</table>
  <a href="managestudent_image.php" role="button" class="btn btn-default">Go Back</a>
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>