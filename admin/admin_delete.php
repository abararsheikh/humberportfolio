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
                <label><?php echo $result['first_name'];?></label>
            </div>

            <div class="form-group">
                <label for="lastname">Last Name</label>
                <label><?php echo $result['last_name'];?></label>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <label><?php echo $result['email'];?></label>
            </div>

            <div style="visibility: hidden;">
                <input type="text" name="id" value="<?php echo $result['id']; ?>" />

            </div>


            <button type="submit" name="send" class="btn btn-primary">Delete</button>
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

else if(isset($_POST['send'])){
    try {
        $id= $_POST["id"];

        $db = Database::getDB();
        $query = "DELETE FORM administrators WHERE id = :id ";
        $stm = $db->prepare($query);
        $stm->bindValue(':id', $id);
        $stm->execute();
    }catch (PDOException $e){

        echo $sql . "<br>" . $e->getMessage();
    }
    echo "<script>var r = confirm('Are you sure to delete an Admin user?');
            if (r == true) { window.location('/admin/index.php');}</script>";
    exit();
}

include DIR_BASE . 'admin/public_footer.view.php';
?>
