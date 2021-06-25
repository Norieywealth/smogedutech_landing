<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

/////////////////////////////////
// Web server configuration
// $mail->isSMTP();
// $mail->Host = 'localhost';
// $mail->SMTPAuth = false;
// $mail->SMTPAutoTLS = false; 
// $mail->Port = 25; 


// Local Server Configuration
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = 'norieysoft@gmail.com';   // SMTP username 
$mail->Password = 'norieysoftadmin77';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587; 
////////////////////////////////


//From email address and name
$mail->From = "noreply@smogedutech.com";
$mail->FromName = "SMOGEdutech Team";


//To address and name
$full_name = $first_name." ".$surname;
$mail->addAddress($email, $full_name);
//$mail->addAddress("name@gmail.com", "Name"); //Recipient name is optional

//Address to which recipient will reply
//$mail->addReplyTo("info@smogedutech.com");

//CC and BCC
// $mail->addCC("cc@example.com");
// $mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "SMOG EDUCTECH";
$mail->Body = "
<h1>Dear ".$first_name."!</h1>
<h4>SMOG EDUTECH Team thanks you for taking out time to register n our platform.</h4>
<p> We hope to build a lasting relationship with you in the coming year.
<br><br>

Please, click the link below to     <a href='http://smogedutech.com'>Visit our website</a>


</p>
";
$mail->AltBody = "
SMOG EDUTECH Team thanks you for taking out time to register n our platform.
We hope to build a lasting relationship with you in the coming year.
Please, click the link below to visit our website. <br/><br/>
<a href='http://smogedutech.com'>smogedutech.com</a>
";

// Add attachments
// $mail->addAttachment('result.pdf');

try {
    $mail->send();
    //echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
