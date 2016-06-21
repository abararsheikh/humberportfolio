<?php
//Function -- Send Mail
function send_mail($recipient_email, $email_subject, $email_content, $content_type)
{
  //this function just uses the mail function of php to send out an email
  //for the email to work, we need to configure the SMTP server
  //here are the settings we need to add to sendmail.ini 
    //smtp_server=smtp.gmail.com
    //smtp_port=587
    //error_logfile=error.log
    //debug_logfile=debug.log
    //auth_username=your-gmail-id@gmail.com
    //auth_password=your-gmail-password
    //force_sender=your-gmail-id@gmail.com
  
  //here are the settings for php.ini
    //SMTP=smtp.gmail.com
    //smtp_port=587
    //sendmail_from = your-gmail-id@gmail.com
    //sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
    //;sendmail_path = "C:\xampp\mailtodisk\mailtodisk.exe"
  
  $content_type = strtolower(trim($content_type, " "));
  if($content_type == "html")
  {
    // since we are sending HTML emails
    // add headers for HTML email - the Content-type header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    // Mail it
    return mail($recipient_email, $email_subject, $email_content, $headers); //returns true on success, false otherwise
  }
  else
  {
    return mail($recipient_email, $email_subject, $email_content); //returns true on success, false otherwise
  }
}