<?php

session_start();

include( 'config.php' );

include( 'functions/strings.php' );

$connect = mysql_connect( MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD ) or die( mysql_error() );
mysql_select_db( MYSQL_DATABASE, $connect ) or die( mysql_error() );

