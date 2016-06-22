<?php 

//USING THE PHPMAILER LIBRARY
require 'PHPMailerAutoload.php';

function send_mail($recipient_email, $email_subject, $email_content)
{
  //Create a new PHPMailer instance
  $mail = new PHPMailer;

  //Tell PHPMailer to use SMTP
  $mail->isSMTP();

  //Enable SMTP debugging
  // 0 = off (for production use)
  // 1 = client messages
  // 2 = client and server messages
  //$mail->SMTPDebug = 2;
  //Ask for HTML-friendly debug output
  //$mail->Debugoutput = 'html';

  //Set the hostname of the mail server
  $mail->Host = 'smtp.gmail.com';
  // use
  // $mail->Host = gethostbyname('smtp.gmail.com');
  // if your network does not support SMTP over IPv6

  //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
  $mail->Port = 587; //or 465 -- when 587 doesnt work

  //Set the encryption system to use - ssl (deprecated) or tls
  $mail->SMTPSecure = 'tls';

  //Whether to use SMTP authentication
  $mail->SMTPAuth = true;

  //Username to use for SMTP authentication - use full email address for gmail
  //NOTE: ADD HUMBERPORTFOLIO EMAIL ADDRESS AND PASSWORD HERE
  $mail->Username = "username@gmail.com";
  //Password to use for SMTP authentication
  $mail->Password = "yourpassword";

  //SENDER AND RECIPIENT SETTINGS
  //Set who the message is to be sent from
  $mail->setFrom('username@gmail.com', 'Humber Portfolio');
  //Set who the message is to be sent to
  $mail->addAddress((string)$recipient_email);

  //EMAIL CONTENT
  //set email content to be html
  $mail->isHTML(true);
  //Set the subject line
  $mail->Subject = (string)$email_subject;
  //Replace the plain text body with one created manually
  $mail->Body = (string)$email_content;

  //send the message, check for errors
  if (!$mail->send()) 
  {
      return false; //sends false captured by front end -- when mail sending fails
  } 
  else 
  {
      return true; //sends true, when successful, user friendly messages to be handled by front end
  }
}
