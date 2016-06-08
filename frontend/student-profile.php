<?php
include('../bootstrap.php' );

?>
<!--structure is based on student pages pdf from the design team-->
<section class="student-profile">
  <div id="profile-info">
    <h1 id="username">
      Username
    </h1>
    <h2 id="student-name">
      First Name and Last Name
    </h2>
    <a href="#" id="student-website">Website Link</a>
    <p>
      Bio
    </p>
  </div>
</section>

<section class="projects">
  <div id="student-project">
    <h2>
      Project Name
    </h2>
    <p id="student-project-description">
      Project Description: The description of the students project will go right here.
    </p>
    <img src="#" alt="image description"/>
  </div>
</section>

<br/>
<b>Welcome : <i><?php echo  $_SESSION['student_firstname'] ; ?></i></b>
<div>
  <a href="logout.php">Logout</a>
</div>