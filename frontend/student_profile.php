<?php
    include('../bootstrap.php' );
      //connect to databse  
    $db = Database::getDB();
    $student_id= $_SESSION['student_id'];
    $query="SELECT students.first_name,students.last_name,students.image,students.bio,students.social_media,
            students.email,students.classes_id,students.website_link,projects.name,projects.keywords,images.image
            FROM students LEFT JOIN projects ON students.id = projects.students_id LEFT JOIN images ON projects.id = images.projects_id WHERE students.id =$student_id";
    $statement= $db->prepare($query);
    $statement->execute();     
    $result = $statement->fetchAll();      
    $statement->closeCursor();

?>
<b>Welcome : <i><?php echo  $_SESSION['student_firstname'] ; ?></i></b>
  
</p><p/>
<div>
  <table class="table table-bordered" border="1">
    <thead >
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
         <th>Profile Picture</th>
        <th>Student Bio</th>
        <th>SocialMedia</th>
        <th>Email</th>
        <th>Class ID</th>        
        <th>Website Link</th>
        <th>Project Name</th>
        <th>Keywords</th>
        <th>Projects Images</th>
      </tr>
    </thead>
      
    <?php foreach($result as $students) : ?>
    <tbody>
      <tr>
          <td><?php echo $students['first_name']; ?></td>
          <td><?php echo $students['last_name']; ?></td>  
          <td> <img src = "data:image/jpeg;base64,<?php echo base64_encode($students['image']);?>" style="width:200px;height:200px;"/></td>
          <td><?php echo $students['bio']; ?></td>
          <td><?php echo $students['social_media']; ?></td>
          <td><?php echo $students['email']; ?></td>
          <td><?php echo $students['classes_id']; ?></td>          
          <td><?php echo $students['website_link']; ?></td>
          <td><?php echo $students['name']; ?></td>
          <td><?php echo $students['keywords']; ?></td>
          <td> <img src = "data:image/jpeg;base64,<?php echo base64_encode($students['image']);?>" style="width:200px;height:200px;"/></td>
        
      </tr>
    </tbody>
    <?php endforeach; ?>
    
    
  </table>
</div>
<!--structure is based on student pages version 2 pdf from the design team-->
<!--<button type="button">Logout</button>-->
<p>
  <a href="logout.php">Logout</a>
</p>

<section class="student-profile">
  <div id="profile-info">
    <h1 id="username">
      Username
      <?php
      
      ?>
    </h1>
    <h2 id="student-name">
      First Name and Last Name
      <?php
      
      ?>
    </h2>
    <a href="#" id="student-website">Website Link</a>
    <p>
      Bio
      <?php
      
      ?>
    </p>
  </div>
</section>

<section class="projects">
  <div id="student-project">
    <h2>
      Project Name
      <?php
      
      ?>
    </h2>
    <p id="student-project-description">
      Project Description: The description of the students project will go right here.
      <?php
      
      ?>
    </p>
    <img src="#" alt="image description"/>
  </div>

</section>

  
  <button type="button">Upload a Project</button>
  <button type="button">Edit a Project</button>
  <button type="button">Delete a Project</button>
  <button type="button">Edit Profile</button>
  <button type="button">Change Password</button>
</section>

