<?php
require_once('/usr/share/php/PHPMailer/class.phpmailer.php');
include('MahCredz.php');

echo $MahEmail . $MahPW  . $MahSendFromEmail .  $MahTargetEmail;

	
$mail = new PHPMailer(); 
$mail->IsSMTP(); 
$mail->SMTPDebug = 1; 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'tls'; 
$mail->Host = "smtp.gmail.com";
$mail->Port = 587; 
$mail->IsHTML(true);
$mail->Username = "$MahEmail";
$mail->Password = "$MahPW";
$mail->SetFrom("$MahSendFromEmail");
$mail->Subject = "I wuv you";
$mail->Body = "Boop";
$mail->AddAddress("$MahTargetEmail");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }

