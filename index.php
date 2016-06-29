<?php
/*
Coded By:Abarar Sheikh
*/

include( 'bootstrap.php' );


?>
<!--
<html>
  <head>
    <title>Humber Portfolio App</title>
  </head>
  <body>
    
    <h1>
      Welcome to Portfolio Tool
    </h1>
  
    <p>
      Click here to Login    <a href="login_form.php"> <button> Login </button></a>
      
    </a>  
    <p>
      <?php// echo random_string(); ?>
    </p>
    
    <p>
      Footer | Copyright 2016
    </p>
    
  </body>
</html>
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Humber Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="design/css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="design/css/index.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
        
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://use.fontawesome.com/6d807a5fa6.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!--link to css-->
    <link rel="stylesheet" type="text/css" href="design/css/contact.css" />
    <link rel="stylesheet" href="frontend/css/gstyle.css" />
    <link rel="stylesheet" type="text/css" href="design/css/style_project_profile.css">
    <link rel="stylesheet" type="text/css" href="design/css/project_profile_header.css">
    <link rel="stylesheet" type="text/css" href="design/css/student_profile.css">
  
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Custom styles for this template -->
    <link href="design/css/index.css" rel="stylesheet">
    <!--link to jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />

    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!--link to Google Font-->
   <!-- <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,800,900|Lato:400,300,700,900' rel='stylesheet' type='text/css'>-->
  
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
                <div><span><?php// echo  $_SESSION['student_firstname'] ;?></span></div>
                <a href="login_form.php" style="font-size:17px;">Login</a>
            </div>

        </div>
    </div>
</header>
<br />
<body>
      
    <div class="container">

<!-- start breadcrumb -->
        <div class="breadcrumb">
            <nav class="breadcrumb-nav">
                <p class="breadcrumb-item perpage">Per page:</p>
                <a class="breadcrumb-item active" href="#">9</a>
                <a class="breadcrumb-item" href="#">32</a>
                <a class="breadcrumb-item" href="#">64</a>
                <a class="breadcrumb-item" href="#">96</a>
                <a class="breadcrumb-item" href="#">all</a>
            </nav>
        </div>
<!-- end breadcrumb -->
        
<!-- start projects -->
        <div class="row col-xs-6 left">

            <div class="col-sm-4">
                <img class="img-responsive project-img" src="design/img/1.png" alt="Responsive image">
                <h3 class="project-title">Portugal</h3>
                <p class="project-author">by <a href="#">Antonio Freire</a></p>
            </div>
          
            <div class="col-sm-4">
                <img class="img-responsive project-img" src="design/img/2.png" alt="Responsive image">
                <h3 class="project-title">Portugal</h3>
                <p class="project-author">by <a href="#">Antonio Freire</a></p>
            </div>
          
            <div class="col-sm-4">
                <img class="img-responsive project-img" src="design/img/3.png" alt="Responsive image">
                <h3 class="project-title">Portugal</h3>
                <p class="project-author">by <a href="#">Antonio Freire</a></p>
            </div>
            <div class="col-sm-4">
                <img class="img-responsive project-img" src="design/img/4.png" alt="Responsive image">
                <h3 class="project-title">Portugal</h3>
                <p class="project-author">by <a href="#">Antonio Freire</a></p>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive project-img" src="design/img/5.png" alt="Responsive image">
                <h3 class="project-title">Portugal</h3>
                <p class="project-author">by <a href="#">Antonio Freire</a></p>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive project-img" src="design/img/6.png" alt="Responsive image">
                <h3 class="project-title">Portugal</h3>
                <p class="project-author">by <a href="#">Antonio Freire</a></p>
            </div>
          
            <div class="col-sm-4">
                <img class="img-responsive project-img" src="design/img/7.png" alt="Responsive image">
                <h3 class="project-title">Portugal</h3>
                <p class="project-author">by <a href="#">Antonio Freire</a></p>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive project-img" src="design/img/8.png" alt="Responsive image">
                <h3 class="project-title">Portugal</h3>
                <p class="project-author">by <a href="#">Antonio Freire</a></p>
            </div>

            <div class="col-sm-4">
                <img class="img-responsive project-img" src="design/img/9.png" alt="Responsive image">
                <h3 class="project-title">Portugal</h3>
                <p class="project-author">by <a href="#">Antonio Freire</a></p>
            </div>
          
        </div>
<!-- end projects -->   
 
<!-- start sidebar -->
        <div class="row col-xs-6 right">
            <div class="col-sm-12">
                <div class="form">
                    <label>Sort by:</label>
                    <select class="forms">
                      <option value="mrecent">Most Recent</option>
                      <option value="lrecent">Least Recent</option>
                      <option value="alphabetical">Alphabetical</option>
                    </select>
                </div>
                <div class="sidebar-module">
                    <div class="form">
                        <label>Filter by:</label>
                        <select class="forms">
                          <option value="">Year</option>
                          <option value="2014">2014</option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                        </select>
                        <select>
                          <option value="">Program</option>
                          <option value="md">Multimedia Design</option>
                          <option value="wd">Web Development</option>
                          <option value="d">Design</option>
                        </select> 
                    </div>
                </div>
            </div>
        </div>
<!-- end sidebar -->
        
        <div class="clearfix"></div>

<!-- start pagination -->        
        <div class="breadcrumb text-center">
            <nav class="breadcrumb-nav">
                <a class="breadcrumb-item" href="#">&lt;</a>
                <a class="breadcrumb-item active" href="#">1</a>
                <a class="breadcrumb-item" href="#">2</a>
                <a class="breadcrumb-item" href="#">3</a>
                <a class="breadcrumb-item" href="#">4</a>
                <a class="breadcrumb-item" href="#">5</a>
                <p class="breadcrumb-item">...</p>
                <a class="breadcrumb-item" href="#">20</a>
                <a class="breadcrumb-item" href="#">&gt;</a>
            </nav>
        </div>
<!-- ends pagination -->
        
    </div><!-- /.container -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  

</body>
</html>