<?php
	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	function enviarCorreo($email,$user,$link){

		$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
		try {
		    //Server settings
		    $mail->CharSet="UTF-8";
		    $mail->Encoding="quoted-printable";
		    $mail->isSMTP();                                      // Set mailer to use SMTP
		    $mail->Host = PHPMAILER_HOST;  // Specify main and backup SMTP servers
		    $mail->SMTPAuth = true;                               // Enable SMTP authentication
		    $mail->Username = PHPMAILER_USER;                 // SMTP username
		    $mail->Password = PHPMAILER_PASS;                           // SMTP password
		    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		    $mail->Port = PHPMAILER_PORT;                                    // TCP port to connect to

		    //Recipients
		    $mail->setFrom(PHPMAILER_USER, 'AyRP');
		    $mail->addAddress($email,$user);     // Add a recipient              // Name is optional

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'Activación de tu cuenta';
		    $mail->Body    = EmailTemplate($user, $link);
		    $mail->AltBody = 'Hola '.$user.' para activar tu cuenta accede al siguiente enlace: '.$link;
		 

		    $mail->send();

		} catch (Exception $e) {
		   
			$HTML='<div class="alert alert-dismissible alert-danger">
			 <button type="button" class="close" data-dismiss="alert">&times;</button>
			 <strong>Error!</strong>'.$mail->ErrorInfo.'
			 </div>';
		}

	}


?>