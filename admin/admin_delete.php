<?php
/**
 * User: Aysen Armagan
 * Date: 17/06/2016
 * Time: 4:37 PM
 */

include('../bootstrap.php');

//JS
$admin_custom_js = array('/admin/assets/js/admin_delete.js');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //Get info from db
    $db = Database::getDB();
    $sql = "SELECT * FROM `administrators` WHERE `id`= :id;";
    $stm = $db->prepare($sql);
    $stm->bindValue(':id', $id, PDO::PARAM_STR);
    $stm->execute();
    $result = $stm->fetch(PDO::FETCH_ASSOC);
}



include DIR_BASE . 'admin/public_header.view.php';
?>
<!-- Edit Form -->
<div class="row">
    <div class="col-lg-offset-3 col-lg-6">
        <form role="form" method="post" action="#">

            <div class="form-group">
                <label for="firstname">First Name</label>
                <label><?php echo $result['first_name']; ?></label>
            </div>

            <div class="form-group">
                <label for="lastname">Last Name</label>
                <label><?php echo $result['last_name']; ?></label>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <label><?php echo $result['email']; ?></label>
            </div>

            <div style="visibility: hidden;">
                <input type="text" id="id" name="id" value="<?php echo $_GET['id']; ?>"/>

            </div>


            <button type="submit" id="btn-delete" name="send" class="btn btn-primary">Delete</button>


        </form>
    </div>

</div>


</div>

<?php


include DIR_BASE . 'admin/public_footer.view.php';
?>
