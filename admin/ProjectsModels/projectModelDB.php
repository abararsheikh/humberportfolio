<?php
/**
 * Developer: Fatemeh Abdizadeh
 * Projects CRUD operations Class
 */
 class ProjectDB {
    //get all the projects
    public static function getProjects() {
        $db = Database::getDB();
        $query = "SELECT * FROM projects where deleted_at ='0000-00-00 00:00:00' OR deleted_at IS NULL";
        $result = $db->query($query);
        $projects = array();
        foreach ($result as $row) {
            $project = new Project(
                $row['name']
            );
            $project->setID($row['id']);
           $project->setCreated_at($row['created_at']);
           $project->setUpdated_at($row['updated_at']);
            $project->setDeleted_at($row['deleted_at']);
           $project->setStudentId($row['students_id']);
          
          $project->setDescription($row['description']);
          $project->setTools($row['tools']);
          $project->setKeywords($row['keywords']);
            $projects[] = $project;
        }
        return $projects;
    }
   
//Find a project by id
    public static function getProject($projectId){
        $db = Database::getDB();
        $query = "SELECT * FROM projects WHERE id = '$projectId'";
        $result = $db->query($query);
        //convert result into array
        $row = $result->fetch();
        $project = new Project(
            $row["name"]
        );
      
        $project->setID($row["id"]);
         $project->setCreated_at($row['created_at']);
           $project->setUpdated_at($row['updated_at']);
            $project->setDeleted_at($row['deleted_at']);
           $project->setStudentId($row['students_id']);
          
          $project->setDescription($row['description']);
          $project->setTools($row['tools']);
          $project->setKeywords($row['keywords']);
        return $project;
    }
   //Get all images for a specific project
    public static function getImages($projectId){
        $db = Database::getDB();
        $query = "SELECT * FROM images WHERE projects_id = '$projectId'";
        $result = $db->query($query);
                $images = array();
        foreach ($result as $row) {
            $image = new Image(
                $row['image']
            );
            $image->setID($row['id']);
           $image->setCreated_at($row['created_at']);
           $image->setUpdated_at($row['updated_at']);
            $image->setDeleted_at($row['deleted_at']);
           $image->setProjects_id($row['projects_id']);
           $image->setAlt($row['alt']);
            $images[] = $image;
        }
        return $images;
    }
//update a project in database
    public static function editProject($project) {
        $db = Database::getDB();

        $project_id = $project->getID();
        $name = $project->getName();
        $students_id = $project->getStudentId();
        $description=$project->getDescription();
        $tools=$project->getTools();
        $keywords=$project->getKeywords();
        $today = date('Y-m-d h:i:sa') ;
        $query =
            "UPDATE projects SET
                  name='$name', updated_at='$today',students_id='$students_id', description='$description',tools='$tools',keywords='$keywords'
             WHERE
                  id = $project_id";

        $row_count = $db->exec($query);
        return $row_count;
    }
  //Insert a project into database
    public static function addProject($project) {
         $db = Database::getDB();

        $name = $project->getName();
        $students_id = $project->getStudentId();
        $description=$project->getDescription();
        $tools=$project->getTools();
        $keywords=$project->getKeywords();

        $query =
            "INSERT INTO projects
                 (name, students_id,  description, tools,keywords)
             VALUES
                 ('$name', '$students_id', '$description', '$tools','$keywords')";

        $row_count = $db->exec($query);
        return $row_count;
    }
 // Delete  a project from database
    public static function deleteProject($project_id) {
        $db = Database::getDB();
        
        $today = date('Y-m-d h:i:sa') ;
        $query =
            "UPDATE projects SET
                  deleted_at='$today'
             WHERE
                  id = $project_id";

        $row_count = $db->exec($query);
        return $row_count;
    }
}
