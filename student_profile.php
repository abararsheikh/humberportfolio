<?php
/*
Coded By:Abarar Sheikh
*/

    include('bootstrap.php' );
      //connect to databse  
    $db = Database::getDB();
    $student_id = $_SESSION['student_id'];

    $query="SELECT students.id,students.first_name,students.last_name,students.image,students.bio,students.social_media,
            students.email,students.classes_id,students.website_link
            FROM students WHERE students.id =$student_id";
            
    //$query = "SELECT * FROM students,projects WHERE students.id = $student_id";
    $statement= $db->prepare($query);
    $statement->execute();     
    $result = $statement->fetchAll();      
    $statement->closeCursor();
    foreach($result as $projectid) 
    {
      $st_id= $projectid['id'];
    }

    foreach($result as $students)
    {
       $student_fname = $students['first_name'];
       $student_lname = $students['last_name'];
       $student_bio = $students['bio'];
       $student_social = $students['social_media'];
       $student_email = $students['email'];
       $student_classid = $students['classes_id'];
       $student_weblink = $students['website_link'];
    }

  //connect to the Image table to dipslay the projects image
  
    $query="select projects.id,projects.name,projects.keywords,images.image from projects
    LEFT JOIN images ON projects.id = images.projects_id INNER JOIN students ON 
    students.id = projects.students_id where students.id =$student_id";
    $statement= $db->prepare($query);
    $statement->execute();     
    $projectinfo = $statement->fetchAll();      
    $statement->closeCursor();  
   

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Humber Portfolio</title>
    <meta name="description" content="Humber Portfolio 2016" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">		

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous">
		</script>
	<!--link to Font Awesome-->
    <script src="https://use.fontawesome.com/35c0f62854.js"></script>
	
	<!--Header-->
	
	 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/6d807a5fa6.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    
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
	
		<link rel="stylesheet" type="text/css" href="design/css/student_profile.css">
		<link rel="stylesheet" type="text/css" href="design/css/style_project_profile.css">
    <link rel="stylesheet" type="text/css" href="design/css/project_profile_header.css">
	
</head>
<body>
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
  <main>
			<span class="col-lg-offset-1" id="breadcrumb">Students / Profile</span>
			<section>
				<div class="container student-info-wrapper">
					<div class="container col-lg-4">
                <?php foreach($result as $students) : ?>
                <img src = "data:image/jpeg;base64,<?php echo base64_encode($students['image']);?>" alt="profile picture of the user" id="student-pic"/>                
                <?php endforeach; ?>  						
						<div id="student-button-wrapper">
							<a href="" class="btn btn-default" id="edit-profile-button"><img src="design/images/icons/edit_icon_white.png" alt="" class="project-edit-icon">EDIT</a>
							<a href="change_password.php" class="btn btn-default" id="change-pass-button">CHANGE PASSWORD</a>
						</div>
					</div>

					<div class="container col-lg-8" id="student-descr">
						<h2 id="student-name"><?php echo $student_fname."  ".$student_lname;?></h2>
						<p id="student-bio"><?php echo $student_bio;?></p>
						<div id="list-icons">
							<ul>
								<li><a href=""><img src="design/images/icons/email_icon.jpg" alt=""></a></li>
								<li><a href=""><img src="design/images/icons/website_icon.jpg" alt=""></a></li>
								<li><a href=""><img src="design/images/icons/twitter_icon.jpg" alt=""></a></li>
								<li><a href=""><img src="design/images/icons/linkedin_icon.jpg" alt=""></a></li>
							</ul>
						</div>
					</div>	
				</div> <!-- End student-info wrapper -->
			</section>

			<span class="col-lg-10 col-lg-offset-1 horizontal-line"></span>
			<section>
				<div class="container">
					<div id="project-section-title">
						<h2>Projects
						<a href="" class="btn btn-default" id="add-project-button"><img src="design/images/icons/edit_icon_white.png" alt="" class="project-edit-icon">ADD</a></h2>
					</div>
        <?php foreach($projectinfo as $projects) : ?>	
					<div class="container col-lg-4 project">
            					
            <img src = "data:image/jpeg;base64,<?php echo base64_encode($projects['image']);?>" alt="" style="width:299px;height:237px"/>
						<div class="row project-info">
							<a href="project_profile.php?project_id=<?php echo $projects['id'];?>"><h3 class="col-lg-4 project-name"><?php echo $projects['name']; ?></h3></a>
							<p class="col-lg-offset-1 col-lg-4 project-keyword"><?php echo $projects['keywords']; ?></p>
						</div>
						<div class="col-lg-offset-2 project-button-wrapper">
							<a href="" class="btn btn-default"><img src="design/images/icons/edit_icon_white.png" alt="" class="project-edit-icon">EDIT</a>
							<a href="" class="btn btn-default"><img src="design/images/icons/delete_icon_white.png" alt="" class="project-delete-icon">DELETE</a>
						</div>
           
					</div>
           <?php endforeach; ?>
<!--
					<div class="container col-lg-4 project">
						<img src="images/project_pic.jpg" alt="">
						<div class="row project-info">
							<a href=""><h3 class="col-lg-4 project-name">Project 2</h3></a>
							<p class="col-lg-offset-1 col-lg-4 project-keyword">Keyword/Category</p>
						</div>
						<div class="col-lg-offset-2 project-button-wrapper">
							<a href="" class="btn btn-default"><img src="images/icons/edit_icon_white.png" alt="" class="project-edit-icon">EDIT</a>
							<a href="" class="btn btn-default"><img src="images/icons/delete_icon_white.png" alt="" class="project-delete-icon">DELETE</a>
						</div>
					</div>

					<div class="container col-lg-4 project">
						<img src="images/project_pic.jpg" alt="">
						<div class="row project-info">
							<a href=""><h3 class="col-lg-4 project-name">Project 3</h3></a>
							<p class="col-lg-offset-1 col-lg-4 project-keyword">Keyword/Category</p>
						</div>
						<div class="col-lg-offset-2 project-button-wrapper">
							<a href="" class="btn btn-default"><img src="images/icons/edit_icon_white.png" alt="" class="project-edit-icon">EDIT</a>
							<a href="" class="btn btn-default"><img src="images/icons/delete_icon_white.png" alt="" class="project-delete-icon">DELETE</a>
						</div>
					</div>
-->
				</div> <!-- End project-wrapper -->
			</section>	
	</main>
	<footer class="container">
	    <p>&copy;2016 School of Media Studies and IT</p>
	</footer>
</body>
