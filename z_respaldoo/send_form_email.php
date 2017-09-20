<?php
if(isset($_POST['mail'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "gmontes@grupobelen.cl";
    $email_subject = "Contacto Vistamar";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['mail']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['comment'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name']; // required
    $phone = $_POST['phone']; // required
    $email_from = $_POST['mail']; // required
    $subject = $_POST['subject']; // not required
    $comment = $_POST['comment']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
  }
 /*
  if(!preg_match($string_exp,$phone)) {
    $error_message .= 'The Phone you entered does not appear to be valid.<br />';
  }
 */
  if(strlen($comment) < 2) {
    $error_message .= 'The Comment you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Mail: ".clean_string($email_from)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Comment: ".clean_string($comment)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta HTTP-EQUIV="Refresh" TARGET="_new" Content="300; URL=home.php">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Vistamar - Bienvenido</title>
<meta name="Keywords" content="vistamar, Vista Mar, Vistamar, vinos, viña, viña vistamar"/>
<meta name="Description" content="Confirma tu edad. Vistamar"/>
<meta name="Distribution" content="global"/>
<meta name="Robots" content="all"/>
<link href="css/ingreso.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,300,700,600' rel='stylesheet' type='text/css'>
</head>

<body>
	<div class="contenedor">
    	<div id="soporte">
    	<div class="importante">
        	<div id="logo-sp">
            	<img src="img/vistamar.png" width="200" height="auto" alt=""/>
            </div>
            <div class="parrafos">
            	<span id="secreto">Thank You</span><br/>
                <br/>
                Thank you for contacting us.<br>
 We will be in touch with you very soon.
            </div>
            <div class="botones" style="margin: auto;">
            	<a href="home.php" target="_self"><div class="btn-si">Back to home
                </div></a>
            </div>
    	</div>
        </div>
	</div>
</body>
</html>
 
<?php
 
}
?>