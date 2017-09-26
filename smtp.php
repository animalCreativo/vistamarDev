<?php
 
require '../PHPMailerAutoload.php';
 
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;
$mail->Username = "webvistamar@gmail.com";
$mail->Password = "killua235435";
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom('webvistamar@gmail.com', $_POST['name']);
$mail->addAddress($_POST['correo']);
$mail->Subject = $_POST['subject'];
$mail->AltBody =  $_POST['message'];
 
if (!$mail->send()) {
    echo "Error: " . $mail->ErrorInfo;
} else {
    echo "Correo enviado!";
} ?>
    