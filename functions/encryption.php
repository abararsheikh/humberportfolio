<?php
function hash($password)
{
    $new_password = password_hash($password, PASSWORD_DEFAULT);
    return $new_password;
}
?>