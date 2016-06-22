<?php
/**
 * Developer: Fatemeh Abdizadeh
 * Delete a project 
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../../bootstrap.php');
require_once('../ProjectsModels/projectsModel.php');
require_once('../ProjectsModels/projectModelDB.php');
require_once('../Validation/validation.php');


if(isset($_POST['delete'])){
    if(isset($_POST['projectId']))
        $id=$_POST['projectId'];

    $project=new ProjectDB();

    $row= ProjectDB::deleteProject($id);
    if($row==1)
        header("location: projectsList.php");
    else
        header("location: deleteProjectForm.php");
}
?>