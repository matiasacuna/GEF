<?php
function send_mail($to, $body, $subject)
{
	require 'PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer;
	
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'recuperar.contrasena.gef@gmail.com';                 // SMTP username
	$mail->Password = 'somoslosmejores';                           // SMTP password
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to
	
	$mail->From = 'recuperar.contrasena.gef@gmail.com';
	$mail->FromName = 'Recuperar Contrasena';
	$mail->addAddress($to);               // Name is optional
	$mail->addReplyTo('recuperar.contrasena.gef@gmail.com', 'Reply');
	
	$mail->isHTML(true);                                  // Set email format to HTML
	
	$mail->Subject = $subject;
	$mail->Body    = $body;
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
	if(!$mail->send()) {
		$msg='El mensaje fue enviado con exito.';
	} else {
		$msg='El mensaje no pudo ser enviado.';
	}
}
?>