<?php

/*
Gul Rabbi
*/
include( '../../bootstrap.php' );


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
<div class="form-createclass">
  <form name='createnewclassadmin' action='class_register.php' method='POST' enctype='multipart/form-data'/>
    <label for 'name'>Name: </label>
    <input type="text" name="first_name" />
    <br/>
    <label for 'to'>To: </label>
    <input type="text" name="last_name" />
    <br/>
    <label for 'from'>From: </label>
    <input type="text" name="email" />
    <br/>
    
    
    <input name="createclass" type="submit" value="Create New Class Record">
  </form>
  
</div>
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>