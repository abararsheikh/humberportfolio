$(document).ready(function () 
{
  
  //Inline validation
  $('#password').change( function ()
  {
    resetFields();
    //Validate for empty fields
    var theInput = $(this);
    inlineValidateEmpty(theInput);
  });
  
  $('#password_confirm').change( function () 
  {
    resetFields();
    //Validate for empty fields
    var theInput = $(this);
    var noEmpty = inlineValidateEmpty(theInput);
    //Validate for matching passwords
    if ( noEmpty )
    {
      checkPasswords();
    }
    
  });
  
  //Check for validation before submitting
  $('#pass-submit').click( function(e) 
  {
    e.preventDefault();
    resetFields();
    
    var noEmpty = validateEmpty(); //are there empty fields?
    var passMatch;
    if (noEmpty)
    {
      passMatch = checkPasswords();  //do the passwords match?
    }
    
    if ( noEmpty && passMatch )
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

function validateEmpty() 
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
    
  });
  
  passed = passed === "" ? true : false; 
  return passed;
  
}

function inlineValidateEmpty(theInput)
{
  var passed = "";
  
  // Validate empty fields
  if ( $(theInput).val() === "" )
  {
    $(theInput).prev('.asterisk').html("*");
    $('.jc-cp-pass-err-wrap').html("<span class='jc-req-err jc-pass-err''>*Required.</span>");
    passed += false;
  }
  
  passed = passed === "" ? true : false; 
  return passed;
   
}

function resetFields ()
{
      //Reset the pass message
    $('.jc-cp-pass-succ').html("");
    //Reset the asterisk
    $('.asterisk').html("");
    //Reset the error message
    $('.jc-cp-pass-err-wrap').html("");
}