<?php
      include('../bootstrap.php' );
      //connect to databse  
      $db = Database::getDB();
    
      //$query="SELECT * FROM projects ORDER BY name ASC";
      $query = "SELECT projects.name,projects.description,images.image,students.website_link FROM students INNER JOIN  projects ON students.id = projects.students_id INNER JOIN images ON projects.id = images.projects_id ORDER BY projects.name ASC";
      $statement= $db->prepare($query);
      $statement->execute();     
      $result = $statement->fetchAll();      
      $statement->closeCursor();
?>
<!--remove this once the real master head is established-->
<head>
  <link rel="stylesheet" href="../vendor/fortawesome/font-awesome/css/font-awesome.min.css">
</head><!-- /remove this -->

<span class='fa fa-times aria-hidden='true''></span>

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
  
  <!--sample project form. Replace this with a foreach loop-->
  <form action="project_handler.php" method="post" class="form form-project">
    <input type="hidden" value="1" name="projects_id" /><!--replace this value with the projects_id value from the database-->
    <button type="submit" name="delete" class="btn btn-delete btn-project-delete">
      <span class='fa fa-times aria-hidden='true''></span><span class="span-delete">DELETE</span>
    </button>
  </form><!-- /sample project form-->
  
</div>