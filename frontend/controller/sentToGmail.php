<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

//require '../../contact _us_page/Model/PHP_Mailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "humberportfolio4@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "Humberportfolio";

//Set who the message is to be sent from
 $mail->setFrom('humberportfolio4@gmail.com', 'Humber Portfolio');

//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
$mail->addAddress($Email,$Name);
//Set the subject line
$mail->Subject = 'Thank You for contacting US.';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$body="Thanks for contacting us, we will reply to you as soon as possible";
$text ="We have received the following  information from you :";
$mail->msgHTML($body."<br/>". $text."<br/>".'Name : '.$Name."<br/>".'Subject : ' .$Subject ."<br/>".'Email : '.$Email."<br/>".'Message : '.$Message);

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text contactUS body';

//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send())
{
    echo "Mailer Error: ". $mail->ErrorInfo;;

}
else
{
   // echo "You Message has been sent!";
}

