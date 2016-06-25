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

    if($_GET["act"]=="del"){
         $sql="delete from images where id=".$_GET["id"];
         $result=$db->query($sql);
    if($result->execute() or die(error())){
        echo  "<script language='javascript'>";
        echo  "alert('Deleteed');";
        echo  "location.href='managestudent_image.php';";
        echo "</script>";
    }
}
session_start();




$PageSize=10;
$act=$_GET["action"];
if($act=="search")
{
    $type=$_POST["type"];
    $keywords=$_POST["keywords"];
    if($_SESSION['id']!=="" ){
        $sql="select * from  images order by id desc";
    }
    $result=$db->query($sql)  or die("$sql");
    $amount=$result->rowCount($result);
}
if(isset($_GET["page"]))
{
    $page=(int)$_GET["page"];
}
else
{

    $page=1;

}
?>








<html>
<head>

<title>Marger System</title>


</head>

<body>
	
	<!-- <form acction="seach_project.php" method="POST">
      <input type="text" name="searchterm" placeholder="search....."><br />
      <input type="submit" value="search">
    </form>-->


	
	
	
	
 <table class="table table-striped table-bordered table-responsive">
	 <H1 align="center">Manage student_image</H1>
	 <a href="add_image.php" class="btn btn-info" role="button" style="margin-bottom:20px;"><i class="fa fa-plus" aria-hidden="true" style="padding-right:10px;"></i>Create new students</a>
  <tr class="title_top">

        <td width="20%"><div align="center">id</div></td>
        <td width="20%"><div align="center">alt</div></td>
        <td width="20%"><div align="center">created_at</div></td>
        <td width="20%"><div align="center">updated_at</div></td>
        <td width="20%"><div align="center">deleted_at</div></td>
        <td width="20%"><div align="center">projects_id</div></td>
        <td width="20%"><div align="center">images</div></td>


    </tr>
  <?php


  $upLimit  = ($page-1)*$PageSize;
  $lowLimit =  $PageSize;
  if($act=="search")
{
   $type=$_POST["type"];
   $keywords=$_POST["keywords"];
   $sql="select * from  images where ".$type." ='".$keywords."' order by id desc  limit ".$upLimit ."  ,".$lowLimit."";
}
else
{
   $sql="select * from  images  order by id desc  limit ".$upLimit ."  ,".$lowLimit." ";
}
   $result=$db->query($sql)  or die("$sql");


while($rs=$result->fetchObject())
{
if($rs->adminID==$_SESSION["id"] || $_SESSION["admin"]!=='')
{
?>

  <tr class="tdbg">
        <td><div align="center"><?php echo $rs->id;?></div></td>
        <td><div align="center"><?php echo $rs->alt;?></div></td>
	    <td><div align="center"><?php echo $rs->created_at;?></div></td>
        <td><div align="center"><?php echo $rs->updated_at;?></div></td>
     <td><div align="center"><?php echo $rs->deleted_at;?></div></td>
     <td><div align="center"><?php echo $rs->projects_id;?></div></td>
		
    <td  width="20%"><img src="data:image/jpeg;base64,<?php echo base64_encode($rs->image);?>"style='width:100px; height:100px; padding:2px;'/></td>
	   <td><div align="center"><a href="?act=del&id=<?php echo $rs->id;?>"><button type="submit" class="btn btn-info">
                            <i class="fa fa-pencil"></i> Delete
                        </button></a></div></td>
		
        <td>
					<form action="edit_student_image.php" method="post"
                id="edit_student_image.php">
              <input type="hidden" name="id"
                     value="<?php echo $rs->id; ?>"  />

              <button type="submit" class="btn btn-info">
                            <i class="fa fa-pencil"></i> Update
                        </button>
          </form>
					</td>
		<td>
					<form action = "detil_studentimage.php" method="post">
      <input type="hidden" name="id" value="<?php echo $rs->id; ?>" />
     <button type="submit" class="btn btn-info">
    <i class="fa fa-info"></i> Details
</button>
     </form>
					
		</td>
		
</tr>


    <?php
}
}

    ?>
</table>


</body>
</html>

 
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>

