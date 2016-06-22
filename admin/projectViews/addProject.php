<?php 
/**
 * Developer: Fatemeh Abdizadeh
 *Add a new project 
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../../bootstrap.php');
require_once('../ProjectsModels/projectsModel.php');
require_once('../ProjectsModels/projectModelDB.php');

if(isset($_GET['name']))
        $name=$_GET['name'];

    if(isset($_GET['students_id']))
        $students_id=$_GET['students_id'];

    if(isset($_GET['description']))
        $description=$_GET['description'];

    if(isset($_GET['tools']))
        $tools=$_GET['tools'];

    if(isset($_GET['keywords']))
        $keywords=$_GET['keywords'];

    $project=new Project($name);

    $project->setStudentId($students_id);
   $project->setDescription($description);
   $project->setTools($tools);
   $project->setKeywords($keywords);

    $row= ProjectDB::addProject($project);
    if($row==1)
        header("location: projectsList.php");
    else
        header("location: addProjectForm.php");
?>