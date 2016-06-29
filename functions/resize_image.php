<?php

function resizeimage ($tablename, $id, $width, $height, $quality) {
      try {
          // connect to database and fetch image
          $db = Database::getDB();
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
          $query = "SELECT image from $tablename WHERE id=$id AGAINST (:query);";
          $image = $db->prepare($query);
          $image->bindParam(':query', $query);
          $image->execute();
          // call the doresize function to resize the image. This function will return the image  
          return doresize($image, $width, $height, $quality);
      }
      //catch and return errors
      catch (PDOException $e){
          return $e->getMessage();
      }
}

?>
