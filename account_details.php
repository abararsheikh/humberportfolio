<?php
include('bootstrap.php');
include "login.php";
?>
<?php

$email ="";
$error ="";
$firstname = "";
$lastname="";
$email="";

function validFname($name)
{
    $error ="";
    if(empty($name))
    {
        $error.="<p style ='color:red;'>Please enter firstname</p>";
    }
    else{
        // check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z]*$/",$name))
        {
            $error.="<p style = 'color:red'>Only letters and white spaces allowed for firstname</p>";
        }
    }
    return $error;
}


function validLastname($name2)
{
    $error ="";
    if(empty($name2))
    {
        $error.="<p style ='color:red;'>Please enter lastname</p>";
    }
    else
    {

        if(!preg_match("/^[a-zA-Z]*$/",$name2))
        {
            $error.="<p style = 'color:red'>Only letters and white spaces allowed for lastname</p>";
        }
    }
    return $error;
}

function validEmail($email)
{
    $error ="";
    if(empty($email))
    {
        $error .= "<p style='color:red;'>please enter email </p>";
    }
    else
    {
        if(filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            $error .= "<p style='color:#7dba1a'>Valid email </p><br />";
        }
        else
        {
            $error .= "Invalid email <br />";
        }
    }
    return $error;
}

if(isset($_POST['submit']))
{

    $firstname = $_POST['user_fname'];
    $lastname = $_POST['user_lname'];
    $email = $_POST['user_email'];



    $error .= validFname($firstname);
    $error .= validLastname($lastname);
    $error .= validEmail($email);


    $error .= "Thank you " .$firstname ." ".$lastname ."," ."the following are your account details" .
        "we will send an email to " .$email;


}

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

        <h2 style ="font-size:35px;"></h2>

        <form>

            <div>
                <label  for ="fname" style ="font-size:25px;">First name</label>
                <input type ="text" id ="fname" name ="user_fname" placeholder ="Type your first name" />

            </div>
            <br>
            <div>
                <label  for ="lname" style ="font-size:25px;">Last name</label>
                <input type ="text" id ="lname" name ="user_lname" placeholder ="Type your last name" "/>
                                                                                                                                                                                                                                                                              

            </div>
            <br>
            <div>
                <label  for ="email" style ="font-size:25px;">Email :</label>
                <input type ="email" id ="email" name ="user_email" placeholder ="john@example.com" />

            </div>
            <br>
            <div class="submit">
                <button type ="submit" name="submit" id="submitbutton">
                    Submit
                </button>

            </div>
          </form>
          <?php
          echo $error;
          ?>
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
