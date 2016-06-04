<?php
/**
 * User: Airc Miao
 * Date: 04/06/2016
 * Time: 2:25 PM
 *
 * Login Feature
 */

include('../bootstrap.php');

include DIR_BASE . 'admin/public_header.view.php';
include DIR_BASE . 'admin/public_sidebar.view.php';
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

    <!-- Login Form -->
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            <form role="form" action="<?php echo $_SERVER['PHP_SELF'] ?>">

                <div class="form-group">
                    <label for="email">Name</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Email</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>


                <button type="submit" class="btn btn-primary">Login</button>

            </form>
        </div>

    </div>
</div>
<?php
include DIR_BASE . 'admin/public_footer.view.php';
?>