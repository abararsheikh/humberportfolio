<?php
include( 'bootstrap.php' ); //include this to start the session 
session_destroy();  
header("Location: ../index.php");//use for the redirection to Home page