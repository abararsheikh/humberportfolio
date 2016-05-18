<?php

<<<<<<< HEAD

=======
>>>>>>> 3045b85beed5b5c8f8e097f8937dceab51a20948
include( 'config.php' );

$connect = mysql_connect( MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD ) or die( mysql_error() );
mysql_select_db( MYSQL_DATABASE, $connect ) or die( mysql_error() );

