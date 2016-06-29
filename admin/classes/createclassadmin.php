testing add<?php

/*
Gul Rabbi
*/
include( '../../bootstrap.php' );




include DIR_BASE . 'admin/public_header.view.php';

?>
<h1>
  Create New Class - Admin
</h1>
<div class="form-createclass">
  <form name='createnewclassadmin' action='class_register.php' method='POST' enctype='multipart/form-data'/>
	  <label for 'name'>Name: </label>
	  <input type="text" name="name" />
	  <br/>

	  <label for 'from'>From: </label>
	  <input type="text" name="from" />
	  <br/>

	  <label for 'to'>To: </label>
	  <input type="text" name="to" />
	  <br/>

	  
 	  <input name="createclass" type="submit" value="Create New Class Record">
</form>
  
</div>
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>