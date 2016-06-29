<?php

/*
Gul Rabbi
*/
include( '../../bootstrap.php' );



include DIR_BASE . 'admin/public_header.view.php';

?>
<a href="createclassadmin.php" class="btn btn-info" role="button" style="margin-bottom:20px;"><i class="fa fa-plus" aria-hidden="true" style="padding-right:10px;"></i>Create new class</a>

<?php
$db = Database::getDB();
$query = "SELECT * FROM classes";
$statement = $db->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$statement->closeCursor();
?>
<table class="table table-striped table-bordered table-responsive">
  <thead>
  <tr>
    <th>ID</th>
      <th>NAME</th>
       <th>FROM</th>
       <th>TO</th>
       
       <th>CREATED AT</th>
       <th>UPDATED AT</th>
       <th>DELETED AT</th>
     
    <th></th>
    <th></th>


    </tr>
  </thead>
<?php foreach($result as $res):?>
  <tr>
  <td><?php echo $res['id']; ?></td>
  <td><?php echo $res['name']; ?></td>
  <td><?php echo $res['from'];?></td>
  <td><?php echo $res['to']; ?></td>
  <td><?php echo $res['created_at'];?></td>
  <td><?php echo $res['updated_at']; ?></td>
  <td><?php echo $res['deleted_at']; ?></td>

  <td>
     <form action="edit_classadmin.php" method="post">
        <input type="hidden" name="class_id" value="<?php echo $res['id']; ?>" />   
       <button type="submit" class="btn btn-info">
    <i class="fa fa-pencil"></i> Edit
</button>
     </form>
    </td>
    <td>
     <form action = "delete_classadmin.php" method="post">
      <input type="hidden" name="class_id" value="<?php echo $res['id']; ?>" />
     <button type="submit" class="btn btn-info">
    <i class="fa fa-times"></i> Delete
</button>
     </form>
    </td>


  </tr>
<?php endforeach; ?>
</table>


<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>