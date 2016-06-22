<!DOCTYPE html>
<header>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 <link rel="stylesheet" href="frontend/css/gstyle.css" />
 <link href='https://fonts.googleapis.com/css?family=Raleway|Lato' rel='stylesheet' type='text/css'>
<title>Forgot Password</title>
<header>
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
		  <p><a href="index.php">Click here to go back to the login page.</a></p><br/>
		  </div>
 
</form>
</div>
</div>
</div>   