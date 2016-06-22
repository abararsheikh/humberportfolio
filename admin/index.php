<?php
/**
 * User: Airc Miao
 * Date: 17/06/2016
 * Time: 3:24 PM
 */

include('../bootstrap.php');


//Get All Admin Data
$db = Database::getDB();
$query = $db->prepare("SELECT * FROM `administrators`;");
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

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
    <div>
        <a href="/admin/registration.php"><button type="button" class="btn btn-primary">Add</button>
    </div>
</div>

<div class="col-lg-10">

    <div id="content" class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Create At</th>
                <th>Update At</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach( $result as $item):
            ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['first_name']; ?></td>
                <td><?php echo $item['last_name']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><?php echo $item['created_at']; ?></td>
                <td><?php echo $item['updated_at']; ?></td>
                <td>
                    <a href="/admin/admin_edit.php?id=<?php echo $item['id']; ?>">Edit</a>
                    &nbsp;&nbsp;
                    <a href="/admin/admin_delete.php?id=<?php echo $item['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php
                endforeach;
            ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>

