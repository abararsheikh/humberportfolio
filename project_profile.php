<?php
      include('bootstrap.php' );
      //connect to databse  
      $db = Database::getDB();
      $project_id = $_GET['project_id'];
      //$query="SELECT * FROM projects ORDER BY name ASC";
      $query = "SELECT students.website_link,students.first_name,projects.name,projects.description,projects.keywords,projects.tools,
      projects.created_at,projects.id FROM students INNER JOIN projects ON students.id = projects.students_id 
      WHERE projects.id = $project_id";

      $statement= $db->prepare($query);
      $statement->execute();     
      $result = $statement->fetchAll();      
      $statement->closeCursor();
      foreach($result as $projects) 
      {
         $project_name = $projects['name'];
         $project_description = $projects['description']; 
         $project_created_at = $projects['created_at']; 
         $project_keywords = $projects['keywords']; 
         $project_tools = $projects['tools']; 
         $student_name = $projects['first_name'];
         $student_website_link = $projects['website_link'];
         $project_id_img = $projects['id'];
      }
      //Display Projects Image 
     $query = "SELECT images.image 
              FROM projects INNER JOIN images ON projects.id = images.projects_id ";

      $statement= $db->prepare($query);
      $statement->execute();     
      $projectImages = $statement->fetchAll();      
      $statement->closeCursor();

?>      
<?php include('header.php');?>

<body>
<div class="container">


    <div class="row">
    <div class="col-md-8" id="h1"><h1>PROJECT PROFILE</h1></div>
    <div class="col-md-4">
        <button type="button" class="btn btn-default"><img src="design/images/icons/edit_icon.png" /> EDIT PROJECT</button>
    </div>
    </div>

    <br />
        <div class="row">
        <div class="col-md-8" id="h2"><h2><?php echo $project_name; ?></h2></div>
        <div class="col-md-4">
            <button type="button" class="btn btn-default"> <img src="design/images/icons/delete_icon.png" /> DELETE PROJECT</button>
        </div>
        </div>
   
    <hr/>

    <div class="row">
        <div class="col-md-3" id="text1">By <?php echo $student_name;?></div>
        <div class="col-md-6" id="text2">On <?php echo $project_created_at;?></div>
    </div>

    <hr/>

    <div class="well" id="yellow-container">
        <p>
          <?php echo $project_description;?>
        </p>
    </div>

    <div class="well" id="tools">
        <p><b>Tools:</b>  <?php echo $project_tools;?></p>
    </div>

    <div class="well" id="keywords">
        <p><b>Keywords:</b> <?php echo $project_keywords;?></p>
    </div>
  
  <?php foreach($projectImages as $images) : ?>
    <div class="well" id="image-1">
        <center>
          <img src = "data:image/jpeg;base64,<?php echo base64_encode($images['image']);?>" style="width:200px;height:200px;" alt="Project image" class="img-responsive"/>
            
        </center>
    </div>
  <?php endforeach; ?>
  <!--
    <div class="well" id="image-2">
        <center>
        <img src="image-1.jpg" class="img-responsive" alt="image two"/>
        </center>
    </div>

    <div class="well" id="image-3">
        <center>
        <img src="image-1.jpg" class="img-responsive" alt="image three"/>
        </center>
    </div>
-->
</div>
<footer>
    <p>&copy;2016 School of Media Studies and IT</p>
</footer>
</body>
</html>

  
  
