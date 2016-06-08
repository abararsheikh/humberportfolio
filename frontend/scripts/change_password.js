$(document).ready(function () {
  
  //Inline validation
  $('#password_confirm').change( function () {
    checkPasswords();
  });
  
  //Check for validation before submitting
  $('#pass-submit').click( function(e) {
    e.preventDefault();
    var passed = checkPasswords();
    var passedValidation = validate();
    
    if (passed && passedValidation) {
      $('#change_pass_form').submit();
    }
    
  });
  
});

function checkPasswords() {
  
  var passed;
  
  if ( $('#password_confirm').val() != $('#password').val() ) {
      $('.err-msg').html("Passwords must match!");
      passed = false;
    }
    else{
      $('.err-msg').html("");
      passed = true;
    }
  
  return passed;
  
}

function validate() {
  
  var passed = "";
  
  $('#change_pass_form input').each( function () {
    // Validate empty fields
    if ( $(this).val() === "" ) {
      $(this).next('.err-msg').html("*Required");
      passed += false;
    }
  });
  
  passed = passed === "" ? true : false; 
  return passed;
  
}