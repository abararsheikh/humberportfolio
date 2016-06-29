<?php
/*
Coded By:Abarar Sheikh
*/

    include('bootstrap.php' );
      //connect to databse  
    $db = Database::getDB();
    $project_id = $_GET['project_id'];

    //$query = "SELECT * FROM projects WHERE id = $project_id";  

    $query="select projects.id,projects.name,projects.keywords,projects.tools,projects.description,images.image from projects
    LEFT JOIN images ON projects.id = images.projects_id where  projects.id = $project_id";

    $statement= $db->prepare($query);
    $statement->execute();     
    $result = $statement->fetchAll();      
    $statement->closeCursor();
  
    foreach($result as $editProject)
    {
       $projectName = $editProject['name'];
       $projectDesc = $editProject['description'];
       $projectKeywords = $editProject['keywords'];
       $projectTools = $editProject['tools'];
       $projectimage = $editProject['image'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta charset="utf-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/design/css/style_project_profile.css">
  <!--link to Font Awesome-->
    <script src="https://use.fontawesome.com/35c0f62854.js"></script>
</head>
<body id="upload-form">
<div class="container">
    <div class="col-md-8" id="h1"><h1>EDIT A PROJECT</h1></div>
<form action="update_project.php" method="post" enctype="multipart/form-data">
  <input type="hidden" name="project_id" value="<?php echo $project_id;?>">
    <div class="col-md-8" id="form">
        <div class="form-group">
            <label>PROJECT NAME *</label>
            <input type="text" class="form-control" id="usr1" name="projectName" value="<?php echo $projectName;?>" />
        </div>


        <div class="form-group">
            <label for="comment">PROJECT DESCRIPTION *</label>
            <textarea class="form-control" rows="5" id="comment" name="projectDesc"><?php echo $projectDesc;?></textarea>
        </div>

        <div class="form-group">
            <label>TOOLS *</label>
            <input type="text" class="form-control" id="usr2" name="projectTool" value="<?php echo $projectTools;?>" />
        </div>

        <div class="form-group">
            <label>PROJECT KEYWORDS *</label>
            <input type="text" class="form-control" id="usr3" name="projectKey" value="<?php echo $projectKeywords;?>" />
        </div>
                
        <div class="form-group">
           <label>IMAGE *</label><br/>
        <img src = "data:image/jpeg;base64,<?php echo base64_encode($projectimage);?>" alt="profile picture of the user" id="student-pic" style="width:200px;height:200px;"/> 
          <input type="file" name="image" id = "image" />
        </div>
<!--
        <div class="form-group">
            <button type="button" class="btn btn-default"><img src="design/images/icons/upload.png" /> UPDATE PROJECT</button>
        </div>
-->
      <br />
      
     <div class="form-group">
        <label>&nbsp;</label>
        <input type="submit" value="Update Project"  class="btn btn-default" />        
      </div>

    </div>
   <br />
</form>
  
</div>

</div>
</body>
</html>