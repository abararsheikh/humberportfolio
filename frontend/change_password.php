<!DOCTYPE html>
<header>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 <link rel="stylesheet" href="css/gstyle.css" />
 <link href='https://fonts.googleapis.com/css?family=Raleway|Lato' rel='stylesheet' type='text/css'>
<title>Change Password</title>
</header>
<body>

<!--dont get rid of container-fluid it's required for bootstrap to work-->
<div class="container-fluid">
  
<!--Colored container for the form-->
	<div class="col-md-6 col-md-offset-3">
	<div id="beigecolor">
    
  
<!-- Change password form -->
<form action="change_password_handler.php" method="POST" id="change_pass_form">
  
  <h2>CHANGE PASSWORD</h2><br/>
    
  <!-- Password -->
  <div class="jc-cp-field-wrapper">  
    <label for="password">Password:</label><br/>
    <span class="asterisk"></span>
    <input type="password" class="form-control" name="password" id="password" />
  </div><!-- /Password --><br/>
  
  <!-- Confirm password -->
  <div class="jc-cp-field-wrapper"> 
    <label for="password_confirm">Confirm Password:</label><br/>
    <span class="asterisk"></span>
    <input type="password" class="form-control" name="password_confirm" id="password_confirm" />
  </div><!-- /Confirm password --><br/>
  
   <!-- error message -->
    <div class="jc-cp-pass-err-wrap">
      <?php if(isset($_COOKIE['emptyErr'])) { echo $_COOKIE["emptyErr"]; } ?>
      <?php if(isset($_COOKIE['matchErr'])) { echo $_COOKIE["matchErr"]; } ?>
    </div><!-- /error message -->
  
  <input type="submit" value="Change Password" name="btn-submit" id="pass-submit" />
  
  <!-- This is where the success message goes -->
  <div class="jc-cp-pass-succ-wrapper">
    <?php if (isset( $_COOKIE["jcPassSucc"] )) { echo $_COOKIE["jcPassSucc"]; } ?>
  </div><!-- /success message-->
  
</form>

<script src="../vendor/components/jquery/jquery.min.js"></script>
<script src="scripts/change_password.js"></script>
    </div>
  </div>
</div>
  
</body>
</html>
 

