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
<a href="createstudentadmin.php" class="btn btn-info" role="button" style="margin-bottom:20px;"><i class="fa fa-plus" aria-hidden="true" style="padding-right:10px;"></i>Create new students</a>

<?php
$db = Database::getDB();
$query = "SELECT * FROM students";
$statement = $db->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$statement->closeCursor();
?>
<table class="table table-striped table-bordered table-responsive">
  <thead>
  <tr>
    <th>ID</th>
      <th> FIRST NAME</th>
       <th>LAST NAME</th>
       <th>EMAIL</th>
       <th>CLASS ID</th>
       <th>CREATED AT</th>
       <th>UPDATED AT</th>
       <th>DELETED AT</th>
       <th>WEBSITE LINK</th>
       <th>BIO</th>
       <th>SOCIAL MEDIA</th>
       <th>IMAGE</th>
    <th></th>
    <th></th>

    <th></th>

    </tr>
  </thead>
<?php foreach($result as $res):?>
  <tr>
  <td><?php echo $res['id']; ?></td>
  <td><?php echo $res['first_name']; ?></td>
  <td><?php echo $res['last_name'];?></td>
  <td><?php echo $res['email']; ?></td>
  <td><?php echo $res['classes_id']; ?></td>
  <td><?php echo $res['created_at'];?></td>
  <td><?php echo $res['updated_at']; ?></td>
  <td><?php echo $res['deleted_at']; ?></td>
  <td><?php echo $res['website_link']; ?></td>
  <td><?php echo $res['bio']; ?></td>
  <td><?php echo $res['social_media']; ?></td>
    <td><img src="data:image/jpeg;base64,<?php echo base64_encode($res['image']);?>" style='width:100px; height:100px; padding:2px;'/></td>
   <!-- <td><a href="#" class="btn btn-info"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>-->
    <!-- <td><a href="#" class="btn btn-info"><i class="fa fa-times" aria-hidden="true"></i></a></td>-->
  <td>
     <form action="edit_studentadmin.php" method="post">
        <input type="hidden" name="student_id" value="<?php echo $res['id']; ?>" />   
       <button type="submit" class="btn btn-info">
    <i class="fa fa-pencil"></i> Edit
</button>
     </form>
    </td>
    <td>
     <form action = "delete_studentadmin.php" method="post">
      <input type="hidden" name="student_id" value="<?php echo $res['id']; ?>" />
     <button type="submit" class="btn btn-info">
    <i class="fa fa-times"></i> Delete
</button>
     </form>
    </td>

     <td>
     <form action = "detail_studentadmin.php" method="post">
      <input type="hidden" name="student_id" value="<?php echo $res['id']; ?>" />
     <button type="submit" class="btn btn-info">
    <i class="fa fa-info"></i> Details
</button>
     </form>
    </td>
  </tr>
<?php endforeach; ?>
</table>


<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>