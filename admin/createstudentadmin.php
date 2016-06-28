<?php

/*
Coded By:Loveleen Anand
*/
include( '../bootstrap.php' );


//Custom Css
$admin_custom_css = array(
  //eg. '/admin/asset/my.css'

);

//Custom js
$admin_custom_js = array(
  //eg. '/admin/asset/my.js'

);

include DIR_BASE . 'admin/public_header.view.php';

?>
<h1>
  Create New Student - Admin
</h1>
<div class="form-createstudent container">
  <form name='createnewstudentadmin' class='form-horizontal' action='student_register.php' method='POST' enctype='multipart/form-data'/>
    <div class="form-group">
    <label class='col-sm-2' for 'first_name'>First Name: </label>
    <div class='col-sm-3'>
      <input type="text" name="first_name" class="form-control"/>
   </div>
   </div>
 
  <div class="form-group">
    <label class='col-sm-2' for 'last_name'>Last Name: </label>
    <div class='col-sm-3'>
        <input type="text" name="last_name" class="form-control" />
    </div>
  </div>
  
  <div class="form-group">
    <label class='col-sm-2' for 'email'>Email: </label>
    <div class="col-sm-3">
        <input type="text" name="email" class="form-control"/>
    </div>    
  </div>
  
 <div class="form-group">
   <label class='col-sm-2' for 'password'>Password: </label>
   <div class="col-sm-3">
       <input type="password" name="password" class="form-control"/>
   </div>
  </div>
  
  <div class="form-group">
   <label class='col-sm-2' for='classId'>Class ID:</label>
  <div class="col-sm-3">
      <input type="text" name="classid" class='form-control'/>
  </div>
  </div>
 
 <div class="form-group">
   <label class="col-sm-2" for 'website_link'>Website Link: </label>
   <div class="col-sm-3">
         <input type="text" name="website_link" class="form-control" />
   </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-2" for 'bio'>Bio: </label>
    <div class="col-sm-3">
        <input type="text" name="Bio" class="form-control" />
    </div>
  </div>
  
 <div class="form-group">
   <label class="col-sm-2" for 'social_media'>Social Media: </label>
   <div class="col-sm-3">
       <input type="text" name="social_media" class="form-control"/>
   </div>
  </div>
  
  <div class="form-group">
      <label class="col-sm-2" for 'image'>Image: </label>
    <div class="col-sm-3">
      <input name="uploadedimage" type="file" class="form-control">
    </div>
  </div>


  <div class="form-group">
    <label class="col-sm-2">&nbsp;</label>
    <div class="col-sm-3">
       <input name="createstudent" type="submit" value="Create New Student Record" class="btn btn-primary">
    </div>
  </div>
</form>
  <a href="managestudentadmin.php" role="button" class="btn btn-primary col-sm-offset-2">Go back</a>
</div>
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>