<?php
/*
Coded By:Abarar Sheikh
*/

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
     $query = "SELECT * FROM images 
              WHERE projects_id = $project_id ";

      $statement= $db->prepare($query);
      $statement->execute();     
      $projectImages = $statement->fetchAll();      
      $statement->closeCursor();

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
    <script src="https://use.fontawesome.com/6d807a5fa6.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>


    <!--link to css-->
    <link rel="stylesheet" type="text/css" href="contact.css" />
    <link rel="stylesheet" type="text/css" href="design/css/student_profile.css">
    

    <!--link to jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />

    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!--link to Google Font-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,800,900|Lato:400,300,700,900' rel='stylesheet' type='text/css'>

  <!--link to Font Awesome-->
   <!-- <script src="https://use.fontawesome.com/35c0f62854.js"></script>-->
    <link rel="stylesheet" type="text/css" href="design/css/style_project_profile.css">
    <link rel="stylesheet" type="text/css" href="design/css/project_profile_header.css">
</head>

<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <a href="#">
                    <h1>HUMBER <span id="portfolio">PORTFOLIO</span></h1>
                </a>
            </div>
            <div class="search col-xs-3">
                <form action="#" method="get">

                    <div class="input-group search">
                        <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-btn">
        <button class="btn btn-default fa fa-search" type="button"></button>
      </span>
                    </div>
                    <!-- /input-group -->


                </form>



            </div>
            <div class="navlist col-sm-10 col-xs-12">
                <nav class="main-nav">
                    <ul>
                        <a href="index.php">
                            <li>HOME</li>
                        </a>
                        <a href="#">
                            <li>STUDENTS</li>
                        </a>
                        <a href="#">
                            <li>ABOUT</li>
                        </a>
                        <a href="contact.php">
                            <li>CONTACT</li>
                        </a>
                    </ul>
                </nav>
            </div>

          <div class="login-status col-sm-2 col-xs-12">
                <div><span><?php echo  $_SESSION['student_firstname'] ;?></span></div>
                <a href="logout.php">Log Out</a>
            </div>

        </div>
    </div>
</header>
<br />

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

  
  
