<?php
require_once '../../bootstrap.php'; // database file
// TODO: once function is ready, add call to check whether current user is logged in as admin role
// TODO: add check of post data

/*
*
*
*/

$db = Database::getDB();
$query = 'select * from students';
$prepared = $db->prepare($query);
$prepared->execute();
$prepared->setFetchMode(PDO::FETCH_OBJ);
$results = $prepared->fetchAll();

header('Content-Type: application/json');
echo json_encode($results);