<?php

date_default_timezone_set ( "America/Toronto" ) ;  

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
    header('Location: /admin/login.php');
    exit();
}

//@todo: public login check

include( 'config.php' );

include( 'functions/strings.php' );
include( 'functions/forgot_password.php' );
include( 'functions/change_password.php' );
include( 'functions/php_mailer.php');

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

$db = Database::getDB();
$update_statement = $db->query('SELECT * FROM db_updates ORDER BY name');
if (!$update_statement)
{
  die('Your db is not up to date.<br/>You do not have a db_updates table.<br/>Please run update1.sql.');
}
else
{
  // get array of filenames in /sql folder
  $updates_required = scandir('./sql');
  array_splice($updates_required, 0, 2);
  
  // fetch rows from db_updates table and create array of 
  $updates_assoc = $update_statement->fetchAll();
  $updates_run = [];
  foreach($updates_assoc as $update)
  {
    $updates_run[] = $update['name'];
  }
  
  if (count($updates_run) !== count($updates_required)){
    // base error message to be appended to
    $error_message = 'Your database is not up to date.';
    
    //check that each requirement is paired with an update previously run
    foreach($updates_required as $update_required)
    {
      if (array_search($update_required, $updates_run) === false)
      {
        $error_message .= '<br/>Please run ' . $update_required . '.';
      }
    }
    die($error_message);
  }
}















