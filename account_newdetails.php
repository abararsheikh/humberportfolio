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
 <form name="contact_form" action="add_accountdata.php" method="post">
       <div>
               <label  for ="fname" style ="color:darkorange;font-size:30px;">First name</label>
               <input type ="text" id ="fname" name ="user_fname" placeholder ="Type your first name" />
      </div>
<br>
     <div>
                <label  for ="lname" style ="color:darkorange;font-size:30px;">Last name</label>
          <input type ="text" id ="lname" name ="user_lname" placeholder ="Type your last name" />

    </div>
     <br>
<div>
    <label  for ="email" style ="color:darkorange;font-size:30px;">Email:</label>
    <input type ="email" id ="email" name ="user_email" placeholder ="john@example.com" />

</div>
<br>
<div class="submit">
    <button type ="submit" name="submit" id="submitbutton">
        Submit
    </button>
 </div>
  </form>
</main>
</body>
</html>
