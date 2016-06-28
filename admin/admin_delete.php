<?php
/**
 * User: Aysen Armagan
 * Date: 17/06/2016
 * Time: 4:37 PM
 */

include('../bootstrap.php');


include DIR_BASE . 'admin/public_header.view.php';
?>
<!-- Edit Form -->
<div class="row">
    <div class="col-lg-offset-3 col-lg-6">
        <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" class="form-control" name="firstname" id="firstname"  value="<?php echo $result['first_name'];?>" required />
            </div>

            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo $result['last_name'];?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input disabled type="email" class="form-control" name="email" id="email" value="<?php echo $result['email'];?>">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="" required />
            </div>

            <div style="visibility: hidden;">
                <input type="text" name="id" value="<?php echo $result['id']; ?>" />
                <input type="text" name="is_post" value="1" />
            </div>


            <button type="submit" class="btn btn-primary">Delete</button>
            <a href="/admin/index.php" ><button type="button" class="btn btn-primary">Cancel</button></a>

        </form>
    </div>

</div>


</div>

<?php

if(isset($_GET['id']) )
{
    $id = $_GET['id'];

    //Get info from db
    $db = Database::getDB();
    $sql = "SELECT * FROM `administrators` WHERE `id`= :id;";
    $stm = $db->prepare($sql);
    $stm->bindValue(':id', $id, PDO::PARAM_STR);
    $stm->execute();
    $result = $stm->fetch(PDO::FETCH_ASSOC);
}



include DIR_BASE . 'admin/public_footer.view.php';
?>
