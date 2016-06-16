<!-- Change password form -->
<form action="change_password_handler.php" method="POST" id="change_pass_form">
  
  <h2>Change Password</h2>
    
  <!-- Password -->
  <div class="jc-cp-field-wrapper">  
    <label for="password">Password:</label>
    <span class="asterisk"></span>
    <input type="password" name="password" id="password" />
  </div><!-- /Password -->
  
  <!-- Confirm password -->
  <div class="jc-cp-field-wrapper"> 
    <label for="password_confirm">Confirm Password:</label>
    <span class="asterisk"></span>
    <input type="password" name="password_confirm" id="password_confirm" />
  </div><!-- /Confirm password -->
  
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

