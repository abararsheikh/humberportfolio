<?php
/**
 * Delete: Fatemeh Abdizadeh
 * Update a project 
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../../bootstrap.php');
require_once('../ProjectsModels/projectsModel.php');
require_once('../ProjectsModels/projectModelDB.php');
require_once('../Validation/validation.php');

$valid=new validation();
$error="";

if(isset($_POST['edit'])){
    $id=$_POST['projectId'];
    $name=$_POST['name'];
    $students_id=$_POST['students_id'];
    $description=$_POST['description'];
    $tools=$_POST['tools'];
    $keywords=$_POST['keywords'];

    if($valid->isEmpty($name)||$valid->isEmpty($students_id)||$valid->isEmpty($description)||$valid->isEmpty($tools)||$valid->isEmpty($keywords)||
        (!$valid->isDigitNumber($students_id))){
        $error.=$valid->getError();
        header("location: editProjectForm.php?error=$error&projectId=$id&name=$name&students_id=$students_id&description=$description&tools=$tools&keywords=$keywords");
    }
    if($error==""){
        $project=new Project($name);
      
        $project->setID($id);
        $project->setStudentId($students_id);
        $project->setDescription($description);
        $project->setTools($tools);
        $project->setKeywords($keywords);
      
        $row= ProjectDB::editProject($project);
        if($row==1)
            header("location: projectsList.php");
        else
            header("location: editProjectForm.php");
    }
}
?>