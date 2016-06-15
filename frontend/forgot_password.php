<!-- This is where the success message goes -->
<div class="jc-email-succ-wrapper">
  <?php if (isset( $_COOKIE["emailSucc"] )) { echo $_COOKIE["emailSucc"]; } ?>
</div>

<!-- Forgot password form -->
<form action="forgot_password_handler.php" method="POST">
  
  <div class="jc-email-field-wrapper">
    
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" />
    
    <!-- error message -->
    <div class="jc-email-err-wrap">
      <?php if(isset($_COOKIE['emptyErr'])) { echo $_COOKIE["emptyErr"]; } ?>
      <?php if(isset($_COOKIE['emailErr'])) { echo $_COOKIE["emailErr"]; } ?>
    </div><!-- /error message -->
    
  </div>
  
  <div class="jc-email-field-wrapper">
    
    <input type="submit" value="submit" name="submit" />
    
  </div>
  
</form>

<!-- Link back to login page -->
<a href="../index.php">Login</a>