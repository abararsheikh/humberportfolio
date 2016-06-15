$(document).ready(function () 
{
  
  //Inline validation
  $('#password').change( function ()
  {
    // Reset the pass message
    $('.jc-cp-pass-succ').html("");
  });
  
  $('#password_confirm').change( function () 
  {
    // Reset the pass message
    $('.jc-cp-pass-succ').html("");
    checkPasswords();
  });
  
  //Check for validation before submitting
  $('#pass-submit').click( function(e) 
  {
    e.preventDefault();
    // Reset the pass message
    $('.jc-pass-succ').html("");
    var passedValidation = validate();
    var passed = checkPasswords(); 
    
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
    //Asterisks
    $('.asterisk').each(function () {
      $(this).html('*');
    });
    //Error message
    $('.jc-cp-pass-err-wrap').html("<span class='jc-match-err jc-pass-err''>Password does not match</span>");
    passed = false;
  }
  else
  {
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
      $(this).prev('.asterisk').html("*");
      $('.jc-cp-pass-err-wrap').html("<span class='jc-req-err jc-pass-err''>*Required.</span>");
      passed += false;
    }
    else
    {
      $(this).prev('.asterisk').html("");
    }
  });
  
  passed = passed === "" ? true : false; 
  return passed;
  
}