<?php

session_start();

//Global Root Dir: /var/www/portfolio
define( 'DIR_BASE', __DIR__ . '/' );

//Include composer library
include DIR_BASE . 'vendor/autoload.php';

/*
Session user information structure
$_SESSION['student_info'] = array(
    'is_auth' => 1, // 0: not login, 1: login
    'id'.....
);

$_SESSION['admin_info'] = array(
    'is_auth' => 1, // 0: not login, 1: login
    'id'.....
);
*/
//Check for admin login feature
if( substr($_SERVER['REQUEST_URI'], 1, 5) == 'admin' &&
    substr($_SERVER['REQUEST_URI'], 0, 16) != '/admin/login.php' &&
    ( !isset( $_SESSION['admin_info']['is_auth'] ) || $_SESSION['admin_info']['is_auth'] != 1 )
){
    //header('Location: /admin/login.php');
    //exit();
}

//@todo: public login check

include( 'config.php' );

include( 'functions/strings.php' );

//$connect = mysql_connect( MYSQL_HOST, MYSQL_USERNAME, MYSQL_PASSWORD ) or die( mysql_error() );
//mysql_select_db( MYSQL_DATABASE, $connect ) or die( mysql_error() );

//do we have to use class
//ask nithya to use PDO

class Database
{
    public static $dsn = 'mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DATABASE;
    public static $username = MYSQL_USERNAME;
    public static $password = MYSQL_PASSWORD;

    private static $db;
    public static function getDSN()
    {
      return self::$dsn;
    }
    public static function getDB()
    {
        if(!isset(self::$db))
        {
            try
            {
                self::$db = new PDO(self::$dsn, self::$username, self::$password);
            }
            catch (PDOException $e)
            {
                $error_message = $e->getMessage();
                echo $error_message;
                exit();
            }
        }
        return self::$db;
    }
}

//$something = Database::getDB();
//var_dump($something);
//$result = $something->query('SELECT * FROM administrators');
//var_dump($result->fetchAll());

