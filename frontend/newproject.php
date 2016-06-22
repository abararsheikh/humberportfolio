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
               <label  for ="pname" style ="color:darkorange;font-size:30px;">Project name</label>
               <input type ="text" id ="pname" name ="project_name" placeholder ="Type your project name" />
      </div>
<br>
     <div>
                <label  for ="description" style ="color:darkorange;font-size:30px;">description</label>
          <input type ="text" id ="description" name ="description" placeholder ="write description here..." />

    </div>
     <br>
<div>
    <label  for ="link" style ="color:darkorange;font-size:30px;">Link:</label>
    <input type ="text" id ="link" name ="link" placeholder ="links here..." />

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
