<?php
/**
 * User: Airc Miao
 * Date: 17/06/2016
 * Time: 2:33 PM
 * Reset all the password to 123, using Bcrypt
 */
include('bootstrap.php');

//Get info from db
$db = Database::getDB();

$password = password_hash( '123', PASSWORD_BCRYPT);

$sql = "UPDATE `administrators` SET `password`= '{$password}';";

$res = $db->query($sql);

var_dump($res);
//@todo
echo '<br />Please delete this page before releasing the code';
