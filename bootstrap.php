<?php

session_start();

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

$something = Database::getDB();
var_dump($something);
$result = $something->query('SELECT * FROM administrators');
var_dump($result->fetchAll());

