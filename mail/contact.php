<?php

if (empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\logistics-company-website-template\vendor\autoload.php';

$messagecontent = "Name = " . $name . "<br>Email = " . $email . "<br>Message =" . $m_subject . '' . $message;


$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
  $mail->isSMTP();
  $mail->Host = 'bulk.smtp.mailtrap.io';
  $mail->SMTPAuth = true;
  $mail->Port = 587;
  $mail->Username = 'api';
  $mail->Password = '15a42521a10b8da664de02e0003fcac3';
  // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption

  //Recipients
  $mail->setFrom($email, 'Mailer');
  $mail->addAddress('opakshub@gmail.com', 'Opaks');     //Add a recipient
  // $mail->addAddress('ellen@example.com');               //Name is optional
  // $mail->addReplyTo('info@example.com', 'Information');
  // $mail->addCC('cc@example.com');
  // $mail->addBCC('bcc@example.com');

  //Attachments

  //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
  // $mail->addAttachment('photo.jpeg', 'photo.jpeg');    //Optional name

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'Here is the subject';
  $mail->Body    = $messagecontent;


  $mail->send();
  echo 'Message has been sent';
} catch (Exception $e) {
  // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
