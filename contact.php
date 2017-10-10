<?php 
	include('languages/lang.php');
	if($_POST) {

		$to = "infovistamar@grupobelen.cl"; // Your email here
		$subject = 'Info VistaMar'; // Subject message here

	}

	//Send mail function
	function send_mail($to,$subject,$message,$headers,$mensajeCorreoOk,$mensajeCorreoBad ){
		if(@mail($to,$subject,$message,$headers)){
		//	echo json_encode(array('info' => 'success', 'msg' => "Your message has been sent. Thank you!"));
		//	echo json_encode(array('to' => $to, 'subject' => $subject, 'message' => $message,'headers' => $headers));

			echo '<script> alert(\'' .$mensajeCorreoOk. '\'); window.location.href=\'home.php#contact\'; </script>' ;
			
		} else {
		//	echo json_encode(array('info' => 'error', 'msg' => "Error, your message hasn't been sent"));
			echo '<script> alert(\'' .$mensajeCorreoBad. '\'); window.location.href=\'home.php#contact\'; </script>' ;
		}
	}

	//Check if $_POST vars are set
	if(!isset($_POST['name']) || !isset($_POST['mail']) || !isset($_POST['comment'])){
		echo json_encode(array('info' => 'error', 'msg' => 'Please fill out all fields'));
	}

	//Sanitize input data, remove all illegal characters	
	$name    = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$mail    = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
	$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
	$website = filter_var($_POST['website'], FILTER_SANITIZE_STRING);
	$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);

	//Validation
	if($name == '') {
		echo json_encode(array('info' => 'error', 'msg' => "Please enter your name."));
		exit();
	}
	if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
		echo json_encode(array('info' => 'error', 'msg' => "Please enter valid e-mail."));
		exit();
	}
	if($comment == ''){
		echo json_encode(array('info' => 'error', 'msg' => "Please enter your message."));
		exit();
	}

	//Send Mail
	$headers = 'From: ' . $mail ;

	send_mail($to, $subject, $comment , $headers, $lang['mensajeCorreoOk'], $lang['mensajeCorreoBad']);

	
?>