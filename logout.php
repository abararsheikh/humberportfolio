<?php
include( 'bootstrap.php' ); //include this to start the session 
session_unset(); //remove all session variables
session_destroy();   // destroy the session 
header("Location:index.php");//use for the redirection to Home page