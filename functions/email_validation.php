//returns email error

function valid_email($email) 
{
  if (empty($email)) {
    $emailErr = "Email is required";
  } else {
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }  
  returns $emailErr;
}