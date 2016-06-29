<?php

//include( 'bootstrap.php' );
require_once 'functions/search_projects.php';

$search = $_POST['search'];
//var_dump($search);

// $results = search_projects($search); // Zarna's function
$results = array("project_name"=>"Web Trends", "project_id"=>"1", "img_id "=>"1");//to comment

if (!empty($results)){
foreach ($results as $result) {
    ?>

    <h2><?php echo $result['project_name']; ?></h2>

    <a href="project_profile.php?project_id=<?php echo $result['project_id']; ?>"></a>

    <img src="data:image/jpeg;base64,<?php echo base64_encode($result['img_id']);?>"/>


    <?php
}
}
else {echo "We don't have a project with such a name in our DB"; }
?>