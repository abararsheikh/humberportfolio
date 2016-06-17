//returns true or false
function valid_email($email) {
    return !!filter_var($email, FILTER_VALIDATE_EMAIL);
}