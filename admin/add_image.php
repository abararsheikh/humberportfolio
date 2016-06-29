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
require('dbconfig.php');
?>
<?php
session_start();
$act=$_GET['act']?$_GET['act']:'';
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$created_at=date("Y-m-d H:i:s");
$updated_at=date("Y-m-d H:i:s");
$deleted_at=date("0000-00-00 00:00:00");
if($act=='add')
{

  $sql="insert into images(id,alt,created_at,updated_at,deleted_at,projects_id,image)values('".$_POST['id']."','".$_POST['alt']."','".$created_at."','".$updated_at."','".$deleted_at."','".$_POST['projects_id']."','".$image."')";
  $result=$db->exec($sql);
  if($result)
  {
    echo  "<script language='javascript'>";
    echo  "alert('Sumbit success')";
    echo "</script>";
  }
}

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<h1 align="center">Add students_images</h1>
<link href="Css_Main.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {color: #CCCCCC}
-->
</style>
</head>

<body>
<table width="98%"  border="0" align="center" cellpadding="0" cellspacing="1" class="border">
  <tr>
    <td class="title_dh"><div align="center"></div></td>
  </tr>
</table>
<form name="form1" action="add_image.php?act=add" method="post" enctype="multipart/form-data">
<table width="98%"  border="0" align="center" cellpadding="0" cellspacing="1" class="border">
 
  <tr class="tdbg">
    <td width="20%"><div align="right"><strong>id:</div></td>
    <td><input name="id" type="text"  size="40"></td>
  </tr>
  <tr class="tdbg">
    <td width="20%"><div align="right"><strong>alt:</div></td>
    <td><input name="alt" type="text"  size="40"></td>
  </tr>
  
     <tr class="tdbg">
    <td width="20%"><div align="right"><strong>projects_id:</div></td>
    <td><input name="projects_id" type="text"  size="40"></td>
  </tr>
  
     <tr class="tdbg">
  
    <td width="20%"><div align="right"><strong>image:</div></td>
    <td><input name="image" type="file" size="40"></td>
  </tr>

    
</table>
<table width="98%"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="40">
      <div align="center">
        <span class="style1">
        <input name="Submit" type="submit" style="color:black;" id="Submit" value="Add" onClick="return Check_stu()">&nbsp;
        <input name="reset" type="reset" id="reset" style="color:black;" value="cancel">
         <a href="managestudent_image.php" style="background-color: #FFFFFF">Go Back to Reult</a>

    </span>
   
        
        
        
        
        
        
        
      </div>
    </td>
  </tr>
</table></form>
</body>
</html>






<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>