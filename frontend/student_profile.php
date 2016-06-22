<?php
 /*   $dsn = "";
    $user = "root";
    $pass = "password";
try {
    $db = new PDO($dsn, $user, $pass);
    
    $sqlStudent = "SELECT * FROM student";
    $resultStudent = $db->query($sqlStudent);
}*/
?>
<!--structure is based on student pages version 2 pdf from the design team-->
<section class="student-profile">
    <div id="profile">
        <img src="" id="profile-picture"> Students profile picture will go here <br/>
        <a href="" id="profile-edit">Edit Profile</a>
        <a href="add_project.php" id="profile-uploadproject">Upload Project</a>
        <a href="change_password.php" id="profile-changepass">Change Password</a>
        <h2 id="profile-name">
        First Name and Last Name
        <?php

        ?>
        </h2>
    </div>
    <div>
        <p id="profile-bio">
        <?php
            echo "The students bio will be pulled from the database and displayed here"
        ?>
        </p>
    </div>
        <?php ?>
    <div>
        <button id="profile-email">
            Email
        </button>
        <button id="profile-website">
            Website
        </button>
        <button id="profile-twitter">
            Twitter
        </button>
        <button id="profile-linkedin">
            LinkedIn
        </button>
    </div>
    <?php ?>
</section>

<section class="projects">
    Projects
    <hr>
    <?php ?>
    <div id="project-display">
        <?php
        //This needs to be a loop of sorts to display the different projects
        //<img src="#" alt="image description" id="projects-image">
        //project name
        //keyword/category
        ?>
        <?php echo "Project Images" ?>
        <br/>
        <?php echo "<a href=\"#\" id=\"project-edit\"> Edit </a>" ?>
        <?php echo "<a href=\"delete_project.php\" id=\"project-delete\"> Delete </a>" ?>
    </div>
</section>

