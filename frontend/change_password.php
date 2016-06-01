<!-- Change password form -->
<form action="change_password_handler.php" method="POST">
  <!-- Password -->
  <label for="password">Password:</label>
  <input type="password" name="password" id="password" />
  <!-- error message goes here -->
  <span class="err-msg"><?php if(isset($_POST['submit'])) { echo $err; } ?></span>
  <!-- Confirm password -->
  <label for="password_confirm">Password:</label>
  <input type="password" name="password_confirm" id="password_confirm" />
  <!-- error message goes here -->
  <span class="err-msg"><?php if(isset($_POST['submit'])) { echo $err; } ?></span>
  <input type="submit" value="submit" name="submit" />
</form>