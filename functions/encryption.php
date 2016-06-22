<?php

/**
 * This function is encrypt the password. 
 * @param string $new_password new password
 * @return string $new_password new encrypted password
*/
function hash($password)
{
    $new_password = password_hash($password, PASSWORD_DEFAULT);
    return $new_password;
}
?>