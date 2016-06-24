<?php
//include( 'bootstrap.php' );
//This is the header without the session
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Humber Portfolio</title>
    <meta charset="utf-8">

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
                        <a href="#">
                            <li>HOME</li>
                        </a>
                        <a href="#">
                            <li>STUDENTS</li>
                        </a>
                        <a href="#">
                            <li>ABOUT</li>
                        </a>
                        <a href="#">
                            <li>CONTACT</li>
                        </a>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</header>
<br />
	
<body>
		
 <!--dont get rid of container-fluid it's required for bootstrap to work-->
<div class="container-fluid">
<!--Colored container for the form-->
	<div class="col-md-6 col-md-offset-3">
	<div id="beigecolor">
  
<!-- This is where the success message goes -->
<div class="jc-email-succ-wrapper">
  <?php if (isset( $_COOKIE["emailSucc"] )) { echo $_COOKIE["emailSucc"]; } ?>
</div>

<!-- Forgot password form -->
<form action="forgot_password_handler.php" method="POST">
  
  <h2>FORGOT YOUR PASSWORD?</h2><br/>
  
  <div class="jc-email-field-wrapper">
    
     <!-- Email--> 
    <label for="email">Enter your email:</label><br/>
    <input type="email" class="form-control" name="email" id="email" />
    <!-- /Email --><br/>
    
    <!-- error message -->
    <div class="jc-email-err-wrap jc-cp-pass-err-wrap">
      <?php if(isset($_COOKIE['jcEmptyErr'])) { echo $_COOKIE["jcEmptyErr"]; } ?>
      <?php if(isset($_COOKIE['jcEmailErr'])) { echo $_COOKIE["jcEmailErr"]; } ?>
    </div><!-- /error message -->
    
  </div>
  
  <!--<div class="jc-email-field-wrapper">-->
    
   <input type="submit" value="Submit" name="submit" id="submit-submit"/><br/>
    
 <!-- </div>-->
  
  <!-- This is where the success message goes -->
  <div class="jc-email-pass-succ-wrapper jc-cp-pass-succ-wrapper">
    <?php if (isset( $_COOKIE["jcEmailSucc"] )) { echo $_COOKIE["jcEmailSucc"]; } ?>
  </div><!-- /success message--> <br/>
  
  <!--<a href="../index.php">Click here to go back to the login page</a>-->
  
  <!--link back to the profile page-->
		  <div id="profilelink">
		  <p><a href="login_form.php">Click here to go back to the login page.</a></p><br/>
		  </div>
 
</form>
</div>
</div>
</div>
	
<?php include('footer.php') ?>