<?php

function resizeimageimage ($tablename, $id) {
      try {
          // connect to database and fetch image
          $db = Database::getDB();
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $query = "SELECT image from $tablename WHERE id=$id";
          $image = $db->prepare($query);
          $image->execute();
          // call the doresize function to resize the image. This function will return the image  
          return doresize($image);
      }
      //catch and return errors
      catch (PDOException $e){
          return $e->getMessage();
      }
}

?>
