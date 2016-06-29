<?php


//FUNCTION - receives a query string to search the projects table
function search_projects($query_words)
{
    //from w3schools - php validation article
    $query_words = trim($query_words);
    $query_words = stripslashes($query_words);
    $query_words = htmlspecialchars($query_words);
    
    //optional - remove comma and replace with whitespace
    $query_words = str_replace(",", " ", $query_words);
  
    //Get database connection
    $database = Database::getDB();
    //Configuring database
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    //Match statement for querying
    //We match the words in project name, project keywords and image alt columns against the query words. Also, we join the tables, so as to return the final result with img id which can be used to retrieve images from the front end
    //if the image id is null, it has the been dealt with as appropriate on the front end
    //the project id is going to be used to hardcode the project url to the internal project page
    // Testing: delete I.alt in MATCH AGAINST
    $search_query = "
      SELECT P.name AS 'project_name', P.id AS 'project_id', I.id AS 'img_id' 
      FROM projects AS P, images AS I 
      WHERE P.id = I.projects_id 
      AND MATCH(P.name, P.keywords) AGAINST (:query_words);";
    $prepare_search = $database->prepare($search_query);
    $prepare_search->bindParam(':query_words', $query_words);
    $prepare_search->execute();
  
    //Data is retrieved in the form of an associative array
    $retrievedRecords =  $prepare_search->fetchAll(PDO::FETCH_ASSOC);
    // we return these records to the front end
    // empty result set has to be handled on the front end as well using the count function
    return $retrievedRecords;

}