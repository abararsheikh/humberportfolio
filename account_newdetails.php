<?php
include('bootstrap.php');
include "login.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Account Details</title>
</head>
<body>
<header id="header">

</header>
<main id="main">
    <div class="accountform">

        <h2 style ="font-size:35px;">Account Details change form</h2>

        <form action="account_handler.php" method="POST">
          <!-- firstname input -->
        <label for="firstname">First name:</label>
        <input type="firstname" name="firstname" id="firstname" />
        <!-- error message goes here -->
        <span class="err-msg"><?php if(isset($_POST['submit'])) { echo $err } ?></span>
        <!-- Confirm firstname -->
        <label for="firstname_confirm">First Name:</label>
        <input type="firstname" name="firstname_confirm" id="firstname_confirm" />
        <!-- error message goes here -->
        <span class="err-msg"><?php if(isset($_POST['submit'])) { echo $err } ?></span>
        <input type="submit" value="submit" name="submit" />
          
          <!-- lastname input -->
        <label for="lastname">Last name:</label>
        <input type="lastname" name="lastname" id="lasstname" />
        <!-- error message goes here -->
        <span class="err-msg"><?php if(isset($_POST['submit'])) { echo $err } ?></span>
        <!-- Confirm lastname -->
        <label for="lastname_confirm">Last Name:</label>
        <input type="lastname" name="lastname_confirm" id="lastname_confirm" />
        <!-- error message goes here -->
        <span class="err-msg"><?php if(isset($_POST['submit'])) { echo $err } ?></span>
        <input type="submit" value="submit" name="submit" />
          
        <!-- email input -->  
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" />
        <!-- error message goes here -->
        <span class="err-msg"><?php if(isset($_POST['submit'])) { echo $err } ?></span>
        <!-- Confirm email -->
        <label for="email_confirm">Email:</label>
        <input type="email" name="email_confirm" id="email_confirm" />
        <!-- error message goes here -->
        <span class="err-msg"><?php if(isset($_POST['submit'])) { echo $err } ?></span>
        <input type="submit" value="submit" name="submit" />
          </form>
    </div>
</main>
<footer id="footer">
<nav id ="footer-content">
        <ul>
            <li><a href="#">&copy; copyright 2016</a></li>
        </ul>
 </nav>
</footer>
</body>
</html>
