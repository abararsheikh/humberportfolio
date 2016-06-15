<!-- This is where the success message goes -->
<div class="jc-pass-succ-wrapper">
  <?php if (isset( $_COOKIE["jcPassSucc"] )) { echo $_COOKIE["jcPassSucc"]; } ?>
</div>

<!-- Change password form -->
<form action="change_password_handler.php" method="POST" id="change_pass_form">
  
  <!-- Password -->
  <div class="jc-field-wrapper">  
    <label for="password">New Password:</label>
    <input type="password" name="password" id="password" />
    
    <!-- error message -->
    <div class="jc-pass-err-wrap">
      <?php if(isset($_COOKIE['emptyErr'])) { echo $_COOKIE["emptyErr"]; } ?>
      <?php if(isset($_COOKIE['matchErr'])) { echo $_COOKIE["matchErr"]; } ?>
    </div><!-- /error message -->
    
  </div><!-- /Password -->
  
  <!-- Confirm password -->
  <div class="jc-field-wrapper">  
    <label for="password_confirm">Confirm Password:</label>
    <input type="password" name="password_confirm" id="password_confirm" />
    
    <!-- error message -->
    <div class="jc-pass-err-wrap">
      <?php if(isset($_COOKIE['emptyErr'])) { echo $_COOKIE["emptyErr"]; } ?>
      <?php if(isset($_COOKIE['matchErr'])) { echo $_COOKIE["matchErr"]; } ?>
    </div><!-- /error message -->
    
  </div><!-- /Confirm password -->
  
  <input type="submit" value="submit" name="btn-submit" id="pass-submit" />
</form>

<script src="../vendor/components/jquery/jquery.min.js"></script>
<script src="scripts/change_password.js"></script>

