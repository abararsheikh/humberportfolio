<?php
require_once 'bootstrap.php';
require_once 'Contactus.php';
require 'frontend/Model/PHP_Mailer/PHPMailerAutoload.php';
if(isset($_POST['submit']))
{
    $Name = htmlspecialchars($_POST['name']);   
    $Email = htmlspecialchars($_POST['email']);
    $Subject = htmlspecialchars($_POST['subject']);
    $Message =htmlspecialchars($_POST['message']);
    $Message = trim($Message);
   
   //===validate the input=========

    $validate = new Contactus();
    $error = $validate->validName($Name);

    $error .= $validate->validSubject( $Subject);
    $error .= $validate->validEmail($Email);
    $error .= $validate->validMessagebox($Message);



  // ====Validation End here=====

  //After submitting form redirect user to main page
  if(empty($error))
  {
     
    // Call the GMail file to sent an Email
      include 'frontend/controller/sentToGmail.php';
    
      header("Location:contact_thankyou.php");
  }
 
   

}

 


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Humber Portfolio</title>
    <meta name="description" content="Humber Portfolio 2016" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--link to css-->
    <link rel="stylesheet" type="text/css" href="design/css/contact.css" />

    <!--link to jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <!--link to Google Font-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700,800,900|Lato:400,300,700,900' rel='stylesheet' type='text/css'> </head>

  <!--link to Font Awesome-->
    <script src="https://use.fontawesome.com/35c0f62854.js"></script>
<body>
    <div class="pagewrapper">
      <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <a href="#">
                            <h1>HUMBER <span id="portfolio">PORTFOLIO</span></h1>
                        </a>
                    </div>
                    <div class="search col-xs-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
        <button class="btn btn-default" type="button"><span class="fa fa-search"></span></button>
                            </span>
                        </div>
                    </div>

                    </div>
                    <div class="row">
                        <div class="navlist col-sm-10">
                            <nav class="main-nav">
                                <ul>
                                    <a href="index.php">
                                        <li>HOME</li>
                                    </a>
                                    <a href="#">
                                        <li>STUDENTS</li>
                                    </a>
                                    <a href="#">
                                        <li>ABOUT</li>
                                    </a>
                                    <a href="#">
                                        <li>CONTACT</li>
                                    </a>
                                </ul>
                            </nav>
                        </div>
                      <!--
                        <div class="login-status col-sm-2 row text-right">
                            <span class="col-sm-12 col-xs-3">First&nbsp;Name</span>
                            <a class="col-sm-12 col-xs-3" href="">Log Out</a>
                        </div>
-->
                    </div>
                </div>
        </header>

        <main class="container" id="mainform">
            <div class="current-nav">
                <span>CONTACT</span></div>
            
            <h2 class="col-xs-12">CONTACT</h2> 
            <h5 class="col-xs-12"><?php if(isset($error)) echo $error; ?></span>
            <form action="" method="post" id="contact-form" class="row">
                <label for="name" class="col-xs-4">Name</label>
                <input type="text" id="name" name="name" placeholder="Name" class="col-xs-8">
                <label for="email" class="col-xs-4">Email</label>
                <input type="email" id="email" name="email" placeholder="Email" class="col-xs-8">
                <label for="subject" class="col-xs-4">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Subject" class="col-xs-8">
                <label for="message" class="col-xs-4">Message</label>
                <textarea rows="4" cols="50" id="message" name="message" class="col-xs-8"></textarea>
                <input type="submit" id="submit" name="submit" value="Submit">
       
            </form>
             
        </main>

        <footer>
            <p>&copy;2016 School of Media Studies and IT</p>
        </footer>
    </div>
</body>

</html>