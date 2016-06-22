<?php

/**
 * Developer: Fatemeh Abdizadeh
 * Edit a project form
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../../bootstrap.php');
require_once('../ProjectsModels/projectsModel.php');
require_once('../ProjectsModels/projectModelDB.php');
require_once('../Validation/validation.php');

$error="";
if(isset($_GET['error']))
    $error=$_GET['error'];
if(isset($_GET['projectId']))
    $id=$_GET['projectId'];
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
if(isset($_POST['Edit'])){
    if(isset($_POST['projectId']))
      
    $project=ProjectDB::getProject($_POST['projectId']);
    $id=$project->getID();
    $name=$project->getName();
    $students_id=$project->getStudentId();
    $description=$project->getDescription();
    $tools=$project->getTools();
    $keywords=$project->getKeywords();
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
           <h2>Edit project</h2>
        </div>
    </div>
   
<div id="container">
<form action="editProject.php" method="post" class="form-horizontal">

    <div class="form-group">
    <label class="col-sm-2">Project Id:</label>
        <div class="col-sm-3">
    <input type="input" name="projectId" value="<?php echo $id; ?>" class="form-control" readonly/>
    </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2">Name:</label>
        <div class="col-sm-3">
    <input type="input" name="name" value="<?php echo $name; ?>"  class="form-control" />
     </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2">Student Id:</label>
        <div class="col-sm-3">
    <input type="input" name="students_id" value="<?php echo $students_id; ?>"  class="form-control"/>

        </div>
    </div>
    <div class="form-group">
    <label class="col-sm-2">Description:</label>
        <div class="col-sm-3">
    <input type="input" name="description" value="<?php echo $description; ?>"  class="form-control"/>
</div>
</div>

<div class="form-group">
    <label class="col-sm-2">Tools:</label>
    <div class="col-sm-3">
    <input type="input" name="tools" value="<?php echo $tools; ?>"  class="form-control"/>

</div>
</div>
<div class="form-group">
    <label class="col-sm-2">Keywords:</label>
    <div class="col-sm-3">
    <input type="input" name="keywords" value="<?php echo $keywords; ?>"  class="form-control"/>
</div>
</div>
<div class="form-group">
    <label class="col-sm-2">&nbsp;</label>
    <div class="col-sm-3">
    <input type="submit" name="edit" value="Edit" class="btn btn-primary"/>
</div>
   <?php echo $error; ?>
</div>
</form>
<a href="projectsList.php" class="btn btn-primary">Back to list</a>
    </div>
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>