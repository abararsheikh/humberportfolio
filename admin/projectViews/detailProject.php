<?php
/**
 * Developer: Fatemeh Abdizadeh
 * Details project page
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../../bootstrap.php');
require_once('../ProjectsModels/projectsModel.php');
require_once('../ProjectsModels/imagesModel.php');
require_once('../ProjectsModels/projectModelDB.php');
require_once('../Validation/validation.php');

if(isset($_POST['details'])){
    if(isset($_POST['projectId']))
      $project=ProjectDB::getProject($_POST['projectId']);
      $images=ProjectDB::getImages($_POST['projectId']);
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
           <h2>Details of project</h2>
        </div>
    </div>
   
<div id="container">
<form action="" method="" class="form-horizontal">
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
    <label class="col-sm-2">Created_at:</label>
            <div class="col-sm-3">
    <input    class="form-control" style="background-color: lightgrey;" type="input" name="created_at" value="<?php echo $project->getCreated_at(); ?>" readonly/>
            </div>
        </div>
   <div class="form-group">
    <label class="col-sm-2">Updated_at:</label>
            <div class="col-sm-3">
    <input    class="form-control" style="background-color: lightgrey;" type="input" name="updated_at" value="<?php echo $project->getUpdated_at(); ?>" readonly/>
            </div>
        </div>
     <div class="form-group">
    <label class="col-sm-2">Deleted_at:</label>
            <div class="col-sm-3">
    <input    class="form-control" style="background-color: lightgrey;" type="input" name="deleted_at" value="<?php echo $project->getDeleted_at(); ?>" readonly/>
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
    <!--<div class="form-group">
      <label class="col-sm-2">&nbsp;</label>
               <div class="col-sm-3">
      <input type="submit" name="addImage" value="Add Image" class="btn btn-primary" />
               </div>
    </div>-->
</form>
  <a href="../add_image.php" class="btn btn-primary">Add Image</a>
  <a href="projectsList.php" class="btn btn-primary">Back To Projects List</a>
  <!--Displaying images for this project-->
  <h2>Images for this project</h2>
  <table class="table table-striped">
    <tr>
        <td style="padding: 10px;"><b>Id</b></td>
        <td style="padding: 10px;"><b>Image</b></td>
        <td style="padding: 10px;"><b>Alt</b></td>
        <td style="padding: 10px;"><b>Created_at</b></td>
        <td style="padding: 10px;"><b>Updated_at</b></td>
        <td style="padding: 10px;"><b>Deleted_at</b></td>
    </tr>
    <?php

    foreach($images as $image){
      $id=$image->getID();
        echo "<tr>";
        echo "<td>".$image->getID()."</td>";
        echo '<td><img src="data:image/jpeg;base64,'.base64_encode( $image->getImage() ).'" style="width:100px;height:100px;"/></td>';
        echo "<td>".$image->getAlt()."</td>";
        echo "<td>".$image->getCreated_at()."</td>";
        echo "<td>".$image->getUpdated_at()."</td>";
        echo "<td>".$image->getDeleted_at()."</td>";
       echo "</tr>";
    }
    ?>
    </table>
    </div>
    <?php
include DIR_BASE . 'admin/public_footer.view.php';
?>