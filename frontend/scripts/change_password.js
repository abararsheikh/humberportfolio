$(document).ready(function () 
{
  
  //Inline validation
  $('#password').change( function ()
  {
    // Reset the pass message
    $('.jc-pass-succ').html("");
  });
  
  $('#password_confirm').change( function () 
  {
    // Reset the pass message
    $('.jc-pass-succ').html("");
    checkPasswords();
  });
  
  //Check for validation before submitting
  $('#pass-submit').click( function(e) 
  {
    e.preventDefault();
    // Reset the pass message
    $('.jc-pass-succ').html("");
    var passed = checkPasswords();
    var passedValidation = validate();
    
    if (passed && passedValidation)
    {
      $('#change_pass_form').submit();
    }
  });
  
});

function checkPasswords()
{
  
  var passed;
  
  if ( $('#password_confirm').val() != $('#password').val() ) 
  {
    $('.jc-pass-err-wrap').html("<span class='jc-match-err jc-pass-err''>Passwords must match!</span>");
    passed = false;
  }
  else
  {
    $('.jc-pass-err-wrap').html("");
    passed = true;
  }
  
  return passed;
  
}

function validate() 
{
  
  var passed = "";
  
  $('#change_pass_form input').each( function () 
  {
    // Validate empty fields
    if ( $(this).val() === "" )
    {
      $(this).next('.jc-pass-err-wrap').html("<span class='jc-req-err jc-pass-err''>*Required.</span>");
      passed += false;
    }
  });
  
  passed = passed === "" ? true : false; 
  return passed;
  
}