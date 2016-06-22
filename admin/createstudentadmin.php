<?php

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
<div class="form-createstudent">
  <form name='createnewstudentadmin' action='student_register.php' method='POST' enctype='multipart/form-data'/>
  <label for 'first_name'>First Name: </label>
  <input type="text" name="first_name" />
  <br/>
  <label for 'last_name'>Last Name: </label>
  <input type="text" name="last_name" />
  <br/>
  <label for 'email'>Email: </label>
  <input type="text" name="email" />
  <br/>
  <label for 'password'>Password: </label>
  <input type="password" name="password" />
  <br/>
  <label for='classId'>Class ID:</label>
  <input type="text" name="classid"/>
  <br/>
  <label for 'website_link'>Website Link: </label>
  <input type="text" name="website_link" />
  <br/>
  <label for 'bio'>Bio: </label>
  <input type="text" name="Bio" />
  <br/>
  <label for 'social_media'>Social Media: </label>
  <input type="text" name="social_media" />
  <br/>
  <label for 'image'>Image: </label>
<input name="uploadedimage" type="file">

  <br/>
 <input name="createstudent" type="submit" value="Create New Student Record">
</form>
  
</div>
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>