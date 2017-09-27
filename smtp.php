<?php
require_once('PHPMailer/class.phpmailer.php');
	
	// Crear una nueva  instancia de PHPMailer habilitando el tratamiento de excepciones
	$mail = new PHPMailer(true);
	// Configuramos el protocolo SMTP con autenticación
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	// Configuración del servidor SMTP
	$mail->Port = 25;
	$mail->Host = 'smtp.gmail.com';
	$mail->Username = 'webvistamar@gmail.com';
	$mail->Password = 'killua235435';
	//Configuracióncabecerasdelmensaje
	$mail->From = 'webvistamar@gmail.com';
	$mail->FromName = 'test';
	$mail->AddAddress("francisco.barriosr@gmail.com","Nombre 1");
	$mail->Subject = "Asunto del correo";
	// Creamos en una variable el cuerpo, contenido HMTL, del correo
	$body = 'Proebando los correos con un tutorial';
	$mail->Body = $body;
	//Enviarelcorreo
	$mail->Send();

?>