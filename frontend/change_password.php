<!-- Change password form -->
<form action="change_password_handler.php" method="POST" id="change_pass_form">
  <!-- Password -->
  <label for="password">New Password:</label>
  <input type="password" name="password" id="password" />
  <!-- error message goes here -->
  <span class="err-msg"><?php if(isset($_POST['submit'])) { echo $err; } ?></span>
  <!-- Confirm password -->
  <label for="password_confirm">Confirm Password:</label>
  <input type="password" name="password_confirm" id="password_confirm" />
  <!-- error message goes here -->
  <span class="err-msg"><?php if(isset($_POST['submit'])) { echo $err; } ?></span>
  <input type="submit" value="submit" name="btn-submit" id="pass-submit" />
</form>

<script src="../vendor/components/jquery/jquery.min.js"></script>
<script src="scripts/change_password.js"></script>