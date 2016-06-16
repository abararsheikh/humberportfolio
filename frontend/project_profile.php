<?php
      include('../bootstrap.php' );
      //connect to databse  
      $db = Database::getDB();
    
      //$query="SELECT * FROM projects ORDER BY name ASC";
      $query = "SELECT projects.name,projects.description,images.image,students.website_link FROM students INNER JOIN  projects ON students.id = projects.students_id LEFT JOIN images ON projects.id = images.projects_id ORDER BY projects.name ASC";
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
       <td> <img src = "data:image/jpeg;base64,<?php echo base64_encode($projects['image']);?>" style="width:200px;height:200px;"/></td>
        <td><?php echo $projects['website_link']; ?></td>
      </tr>
    </tbody>
    <?php endforeach; ?>
    
    
  </table>
  
</div>