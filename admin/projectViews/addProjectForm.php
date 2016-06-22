<?php
/**
 * Developer: Fatemeh Abdizadeh
 *Add new project form
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../../bootstrap.php');
require_once('../ProjectsModels/projectsModel.php');
require_once('../ProjectsModels/projectModelDB.php');
require_once('../Validation/validation.php');



$name="";
$students_id="";
$description="";
$tools="";
$keywords="";
$error="";
$valid=new validation();

if(isset($_POST['addProject'])){
    $name=$_POST['name'];
    $students_id=$_POST['students_id'];
    $description=$_POST['description'];
    $tools=$_POST['tools'];
    $keywords=$_POST['keywords'];
    if($valid->isEmpty($name)||$valid->isEmpty($students_id)||$valid->isEmpty($description)||$valid->isEmpty($tools)||$valid->isEmpty($keywords)){
        $error="All fields are required";
    }
    else if(!$valid->isDigitNumber($students_id))
        $error="Invalid student Id.";

    else if($error=="")
        header("location: addProject.php?name=$name&students_id=$students_id&description=$description&tools=$tools&keywords=$keywords");
}
?>

<?php
include DIR_BASE . 'admin/public_header.view.php';
?>
  <div style="min-height: 500px;">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               Manage Projects
            </h1>
           <h2>Add new project</h2>
        </div>
    </div>

<div id="container">

<form action="" method="post" class="form-horizontal">
    <div class="form-group">
        <label class="col-sm-2">Project Name:</label>
        <div class="col-sm-3">
        <input  type="input" name="name"  value="<?php echo $name; ?>" class="form-control"/>
    </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2">Student Id:</label>
        <div class="col-sm-3">
        <input type="input" name="students_id"  value="<?php echo $students_id ?>" class="form-control" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2">Description:</label>
        <div class="col-sm-3">
        <input type="input" name="description"  value="<?php echo $description ?>" class="form-control"/>
    </div>
</div>

<div class="form-group">
    <label class="col-sm-2">Tools:</label>
    <div class="col-sm-3">
    <input type="input" name="tools" value="<?php echo $tools ?>" class="form-control"/>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">Keywords:</label>
    <div class="col-sm-3">
    <input type="input" name="keywords"  value="<?php echo $keywords ?>" class="form-control"/>
</div>
</div>

  <div class="form-group">
      <label class="col-sm-2">&nbsp;</label>
      <div class="col-sm-3">
      <input type="submit" name="addProject" value="Add Project" class="btn btn-primary"/>
  </div>
    <?php echo $error; ?>
  </div>

</form>
<a href="projectsList.php"  class="btn btn-primary">Back to list</a>
</div>
 <?php
include DIR_BASE . 'admin/public_footer.view.php';
?>

