<?php
/**
 * Developer: Fatemeh Abdizadeh
 * Displaying Projects List
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('../../bootstrap.php');
include('../ProjectsModels/projectsModel.php');
include('../ProjectsModels/projectModelDB.php');

include DIR_BASE . 'admin/public_header.view.php';
?>
<div style="min-height: 500px;">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               Manage Projects
            </h1>
        </div>
    </div>

<!--main content(Projects List)-->
  <a href="addProjectForm.php" class="btn btn-primary">Add new project</a>  
  <br/>
  <br/>
<table class="table table-striped">
    <tr>
        <td style="padding: 10px;"><b>Id</b></td>
        <td style="padding: 10px;"><b>Name</b></td>
        <td style="padding: 10px;"><b>Created_at</b></td>
        <td style="padding: 10px;"><b>Updated_at</b></td>
        <td style="padding: 10px;"><b>Deleted_at</b></td>
        <td style="padding: 10px;"><b>Students_id</b></td>
        <td style="padding: 10px;"><b>Description</b></td>
         <td style="padding: 10px;"><b>Tools</b></td>
        <td style="padding: 10px;"><b>Keywords</b></td>
    </tr>
    <?php

    $projects=ProjectDB::getProjects();
    foreach($projects as $project){
/////////////////////////created_at days compared to now 
       $created_Date = $project->getCreated_at();
      $datecreation = new DateTime($created_Date);
    $today = new DateTime();
     $interval = date_diff($today, $datecreation);
      $created_at="";
    if($interval->days == 0)
    {
     $created_at="created today";   
    }
    else  if($interval->days == 1)
    {
     $created_at="created yesterday";   
    }
   else
   {
    $created_at="Created ".$interval->format('%a days')." ago";
     }
 ////////////////////////////////////////////////////updated_at days compared to now 
       $updated_Date = $project->getUpdated_at();
       $updated_at="";
        if(($updated_Date == NULL) || ($updated_Date=='0000-00-00 00:00:00'))
      {
        $updated_at="Not Updated Yet";
      }
    else
    {
      $dateupdated = new DateTime($updated_Date);
    $today = new DateTime();
     $interval = date_diff($today, $dateupdated);
    if($interval->days == 0)
    {
     $updated_at="Updated today";   
    }
    else  if($interval->days == 1)
    {
     $updated_at="Updated yesterday";   
    }
   else
   {
    $updated_at="Updated ".$interval->format('%a days')." ago";
     }
    
    }
/////////////////////////////////////////////////////////
        $id=$project->getID();
        echo "<tr>";
        echo "<td>".$project->getID()."</td>";
        echo "<td>".$project->getName()."</td>";
        echo "<td>".$created_at."</td>";
        echo "<td>".$updated_at."</td>";
        echo "<td>".$project->getDeleted_at()."</td>";
        echo "<td>".$project->getStudentId()."</td>";
        echo "<td>".$project->getDescription()."</td>";
        echo "<td>".$project->getTools()."</td>";
        echo "<td>".$project->getKeywords()."</td>";
        echo "<td style='padding: 5px'>
        <form action='editProjectForm.php' method='post'>
            <input type='hidden' name='projectId' value="."'$id'"."/>
            <input type='submit' name='Edit' value='Edit' class='btn btn-primary' />
         </form>
        </td>";

        echo "<td style='padding: 5px'>
        <form action='deleteProjectForm.php' method='post' >
            <input type='hidden' name='projectId' value="."'$id'"."/>
            <input type='submit' name='delete' value='Delete' class='btn btn-primary'/>
         </form>
        </td>";
        echo "</tr>";
    }
    ?>
</table>
  <?php
include DIR_BASE . 'admin/public_footer.view.php';
?>