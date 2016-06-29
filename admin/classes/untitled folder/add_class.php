<?php

/*
GUl Rabbi
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
  Create Class - Admin
</h1>


<div class="row">
  <div class="col-lg-offset-3 col-lg-6">
    <form name='createnewclassadmin' action='class_register.php' method='POST' enctype='multipart/form-data'/>

                <div class="form-group">
                    <label for 'name'>Class Name: </label>
                    <input type="text" name="name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for 'from'>From Date: </label>
                    <input type="text" name="from" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for 'to'>To Date:  </label>
                    <input type="text" name="to" class="form-control"/>
                </div>

                <div>
                <button type="submit" class="btn btn-primary">Create Class</button>
                </div>

            </form>
        </div>

    </div>

<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>