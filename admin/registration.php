<?php
/**
 * Created by PhpStorm.
 * User: wr
 * Date: 2016/6/15
 * Time: 1:41
 */
include('../bootstrap.php');
//Define error msg
$error_msg = '';


if(isset($_POST['is_post'])){
    $has_error =false;
    $create_time =date("Y-m-d H:i:s");
    $delete_time =date("0000-00-00 00:00:00");
    $first_name = filter_input(INPUT_POST,"firstname");
    $last_name = filter_input(INPUT_POST,"lastname");
    $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST,"password");
    $confirm_password = filter_input(INPUT_POST,"confirm_password");
//    $password=password_hash( $password, PASSWORD_BCRYPT);

    if(!empty($first_name) && !empty($last_name)
        && !empty($password)
        && !empty($confirm_password)
        && !empty($email)){
        $db = Database::getDB();
        $sql = "Select email from administrators WHERE email= :email";
        $stm = $db->prepare($sql);
        $stm->bindValue(':email', $email);
        $stm->execute();
        $result = $stm->fetch();
        if($email==false){
            $error_msg.="not valid email<br/>";
            $has_error = true;
        }
        if(count($result)!==1){
            $error_msg.="email is used<br/>";
            $has_error = true;
        }

        if($password!==$confirm_password){
            $error_msg.="password and confirm password are not same<br/>";
            $has_error = true;
        }
        $password=password_hash( $password, PASSWORD_BCRYPT);
        if(!$has_error){
            try {
                $sql = "";
                $sql .= "INSERT INTO administrators";
                $sql .= " (first_name, last_name, email, password, created_at, updated_at, deleted_at)";
                $sql .= " VALUES (:first_name, :last_name, :email, :password, :created_at, :updated_at, :deleted_at)";
                $stm = $db->prepare($sql);
                $stm->bindParam(':first_name', $first_name);
                $stm->bindParam(':last_name', $last_name);
                $stm->bindParam(':email', $email);
                $stm->bindParam(':password', $password);
                $stm->bindParam(':created_at', $create_time);
                $stm->bindParam(':updated_at', $create_time);
                $stm->bindParam(':deleted_at', $delete_time);
                $result = $stm->execute();
            }catch (PDOException $e){

                echo $sql . "<br>" . $e->getMessage();
            }
             header('Location: /admin/index.php');
             exit();
        }
        
        
    }else{
        $error_msg .="all fields are required";
    }

}

include DIR_BASE . 'admin/public_header.view.php';
?>

<div style="min-height: 500px;">
    <!-- Page Heading -->
    <div class="col-lg-12">
        <h1 class="page-header">
            Administrators
            <small>Overview</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Administrators
            </li>
        </ol>
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
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="FIRST NAME" required>
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="LAST NAME" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Comfirm Password" required>
                </div>

                <div style="visibility: hidden;">
                    <input type="text" name="is_post" value="1" />

                </div>
                <button type="submit" class="btn btn-primary">Register</button>

            </form>
        </div>

    </div>
</div>

<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>
