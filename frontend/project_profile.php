<?php
      include('../bootstrap.php' );
      //connect to databse  
      $db = Database::getDB();
    
      $query="SELECT * FROM projects ORDER BY name ASC";
      $statement= $db->prepare($query);
      $statement->execute();     
      $result = $statement->fetchAll();      
      $statement->closeCursor();
?>
<div>
  <table class="table table-bordered" border="1">
    <thead style="color:rosybrown;font-size: 24px;">
      <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Images</th>
        <th>Link</th>
      </tr>
    </thead>
      
    <?php foreach($result as $projects) : ?>
    <tbody>
      <tr>
        <td><?php echo $projects['name']; ?></td>
         <td><?php echo $projects['description']; ?></td>
      </tr>
    </tbody>
    <?php endforeach; ?>
    
    
  </table>
  
</div>