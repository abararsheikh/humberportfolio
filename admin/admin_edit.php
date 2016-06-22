<?php
/**
* Name : Soo-Ah Jung
* Date : 2016-06-21
* Time : 
*
 */

include('../bootstrap.php');

include DIR_BASE . 'admin/public_header.view.php';
?>

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
  <?php
  // When the user clicks 'Edit' button next to the admin's account in the admin list, 
  // it will redirect to admin_edit.php page using GET method
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
  
  // POST method is called after the user finishes writing the information to be changed. 
  // This will redirect to the admin list page, after updating.
  else if(isset($_POST['is_post'])){
                try {
          $first_name = $_POST["firstname"];
          $last_name = $_POST["lastname"];
          $passwordinput = $_POST["password"];
          $password = password_hash( $passwordinput, PASSWORD_BCRYPT);        
                  
          $id= $_POST["id"];
          date_default_timezone_set ( "America/Toronto" ) ;  
          $update_time =date("Y-m-d H:i:s");
    
         $db = Database::getDB();
          $query = "UPDATE administrators
                    SET first_name = :fname, 
                    last_name = :lname,
                    updated_at = :updatetime,
                    password = :password
                      WHERE id = :id ";
        $stm = $db->prepare($query);
        $stm->bindValue(':id', $id);
        $stm->bindValue(':fname', $first_name);
        $stm->bindValue(':lname', $last_name);
        $stm->bindValue(':updatetime', $update_time);
        $stm->bindValue(':password', $password);
        $stm->execute();
                }catch (PDOException $e){

                echo $sql . "<br>" . $e->getMessage();
            }
        header('Location: /admin/index.php');
        exit();
  }
  
  // If this admin_edit page is loaded not using GET or POST method, it will redirect to the admin_list page. 
  // Or login page if the user is not logged-in.
  else{
         header('Location: /admin/index.php');
        exit();
  }
 
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
              
              
                <button type="submit" class="btn btn-primary">Submit</button>
               <a href="/admin/index.php" ><button type="button" class="btn btn-primary">Cancel</button></a>
              
            </form>
        </div>

    </div>
  
  
</div>

<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>
