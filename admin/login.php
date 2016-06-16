<?php
/**
 * User: Airc Miao
 * Date: 04/06/2016
 * Time: 2:25 PM
 *
 * Login Feature
 */

include('../bootstrap.php');

//Define error msg
$error_msg = '';

//Login Process
if( isset($_POST['is_post']) )
{

    //Get post data
    $email = filter_input( INPUT_POST, 'email', FILTER_SANITIZE_EMAIL );
    $password = trim( filter_input( INPUT_POST, 'password' ) );
    
    if( !empty($email) && !empty($password) ){

        //Get info from db
        $db = Database::getDB();
        $sql = "SELECT * FROM `administrators` WHERE `email`= :email;";
        $stm = $db->prepare($sql);
        $stm->bindValue(':email', $email, PDO::PARAM_STR);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_ASSOC);

        //Set Session@todo: check password
        if( false !== $result ){
            $result['is_auth'] = 1;
            $_SESSION['admin_info'] = $result;
            header('Location: /admin/index.php');
            exit();

        }else{
            $error_msg = 'No such record.';
        }

    }else{
        $error_msg = 'Please check your email and password.';
    }

}//end if



include DIR_BASE . 'admin/public_header.view.php';
?>
<div style="min-height: 500px;">
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin System
                <small>Login</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <?php
        if($error_msg != ''):

    ?>
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            <div class="alert alert-warning alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <i class="fa fa-info-circle"></i>  <strong><?php echo $error_msg; ?></strong>
            </div>
        </div>
    </div>
    <?php
        endif;
    ?>
    <!-- Login Form -->
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                <div class="form-group">
                    <label for="email">Name</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Email</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>

                <div style="visibility: hidden;">
                    <input type="text" name="is_post" value="1" />

                </div>
                <button type="submit" class="btn btn-primary">Login</button>

            </form>
        </div>

    </div>
</div>
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>