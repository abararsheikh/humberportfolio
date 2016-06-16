<!-- This is where the success message goes -->
<div class="jc-email-succ-wrapper">
  <?php if (isset( $_COOKIE["emailSucc"] )) { echo $_COOKIE["emailSucc"]; } ?>
</div>

<!-- Forgot password form -->
<form action="forgot_password_handler.php" method="POST">
  
  <h2>Forgot Your Password?</h2>
  
  <div class="jc-email-field-wrapper">
    
    <label for="email">Enter your email:</label>
    <input type="email" name="email" id="email" />
    
    <!-- error message -->
    <div class="jc-email-err-wrap">
      <?php if(isset($_COOKIE['jcEmptyErr'])) { echo $_COOKIE["jcEmptyErr"]; } ?>
      <?php if(isset($_COOKIE['jcEmailErr'])) { echo $_COOKIE["jcEmailErr"]; } ?>
    </div><!-- /error message -->
    
  </div>
  
  <div class="jc-email-field-wrapper">
    
    <input type="submit" value="Submit" name="submit" />
    
  </div>
  
  <!-- This is where the success message goes -->
  <div class="jc-email-pass-succ-wrapper">
    <?php if (isset( $_COOKIE["jcEmailSucc"] )) { echo $_COOKIE["jcEmailSucc"]; } ?>
  </div><!-- /success message-->
  
  <a href="../index.php">Click here to go back to the login page</a>
  
</form>