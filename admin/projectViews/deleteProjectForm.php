<?php
/**
 * Developer: Fatemeh Abdizadeh
 * Delete a project form
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
      $project=ProjectDB::getProject($_POST['projectId']);
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
           <h2>Delete project</h2>
        </div>
    </div>
   
<div id="container">

<h2>Are you sure you want to delete this project??</h2>
<form action="deleteProject.php" method="post" class="form-horizontal">

    <input type="hidden" name="projectId" value="<?php echo $project->getID(); ?>"  />
    <div class="form-group">
    <label class="col-sm-2">Project Id:</label>
        <div class="col-sm-3">
    <input  style="background-color: lightgrey;" type="input" name="projectId"  value="<?php echo $project->getID(); ?>"   class="form-control" readonly/>
        </div>
    </div>
        <div class="form-group">
    <label class="col-sm-2">Name:</label>
            <div class="col-sm-3">
    <input    class="form-control" style="background-color: lightgrey;" type="input" name="name" value="<?php echo $project->getName(); ?>" readonly/>
            </div>
        </div>
            <div class="form-group">
    <label class="col-sm-2">Student Id:</label>
                <div class="col-sm-3">
    <input   class="form-control" style="background-color: lightgrey;" type="input" name="students_id" value="<?php echo $project->getStudentId(); ?>"  readonly/>
                </div>
            </div>
                <div class="form-group">
    <label class="col-sm-2">Description:</label>
                    <div class="col-sm-3">
    <input class="form-control" style="background-color: lightgrey;" type="input" name="description" value="<?php echo $project->getDescription(); ?>"  readonly/>
                    </div>
                </div>

                    <div class="form-group">
    <label class="col-sm-2">Tools:</label>
                        <div class="col-sm-3">
    <input  class="form-control" style="background-color: lightgrey;" type="input" name="tools" value="<?php echo $project->getTools(); ?>"  readonly/>
                        </div>
                    </div>

    <div class="form-group">
    <label class="col-sm-2">Keywords:</label>
     <div class="col-sm-3">
    <input class="form-control" style="background-color: lightgrey;" type="input" name="keywords" value="<?php echo $project->getKeywords(); ?>" readonly/>
                            </div>
                        </div>
                            <div class="form-group">
    <label class="col-sm-2">&nbsp;</label>
                                <div class="col-sm-3">
    <input type="submit" name="delete" value="Delete" class="btn btn-primary" />
                                </div>
                            </div>
</form>
<a href="projectsList.php" class="btn btn-primary">Cancel</a>
    </div>
    <?php
include DIR_BASE . 'admin/public_footer.view.php';
?>