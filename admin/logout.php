<?php
/**
 * User: Airc Miao
 * Date: 04/06/2016
 * Time: 7:12 PM
 */
include('../bootstrap.php');

unset($_SESSION[ 'admin_info' ]);

header('Location: /admin/login.php');
exit();