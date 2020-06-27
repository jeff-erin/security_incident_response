<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;


	//email Verification
	function sendVerificationEmail($userEmail)
	{

		require 'src/Exception.php';
		require 'src/PHPMailer.php';
		require 'src/SMTP.php';

		// Load Composer's autoloader
		require 'vendor/autoload.php';

		$mail = new PHPMailer(true);
		
		try {
		    //Server settings
		    $mail->SMTPDebug = 0;                      // Enable verbose debug output
		    $mail->isSMTP();                                            // Send using SMTP
		    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'NOREPLYNeed2Kno@gmail.com';                     // SMTP username
		    $mail->Password   = '3^04QJr*I';                               // SMTP password
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		    //Recipients
		    $mail->setFrom('NOREPLYNeed2Kno@gmail.com', 'Need2Kno');
		    $mail->addAddress($userEmail);     // Add a recipient
		
		    // Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'New Need2Kno Account Registration';
		    $mail->Body    = '<!DOCTYPE html>
					<html lang="en">
					<head>
						<meta charset="utf-8">
						<title>New Account </title>
					</head>
					<body>
						<div class="wrapper">
						<p>
							This Email address has been used to register a new Need2Kno account.
							If this is valid, Thank you for registering and please click the link below to login to our site.
						</p>
						<a href=https://localhost/SeniorProject/html/Login.html>Click here to login</a>
						</div>

					</body>
					</html>' ;

		    $mail->send();
		   // echo 'Message has been sent';
		} catch (Exception $e) {
		   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

	}



	//New Incident
	function openIncidentEmail($userEmail,$ticketID,$name)
	{

		require 'src/Exception.php';
		require 'src/PHPMailer.php';
		require 'src/SMTP.php';

		// Load Composer's autoloader
		require 'vendor/autoload.php';

		$mail = new PHPMailer(true);
		
		try {
		    //Server settings
		    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
		    $mail->isSMTP();                                            // Send using SMTP
		    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		    $mail->Username   = 'NOREPLYNeed2Kno@gmail.com';                     // SMTP username
		    $mail->Password   = '3^04QJr*I';                               // SMTP password
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		    //Recipients
		    $mail->setFrom('NOREPLYNeed2Kno@gmail.com', 'Need2Kno');
		    $mail->addAddress($userEmail);     // Add a recipient
		
		    // Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'New Need2Kno Incident Opened';
		    $mail->Body    = '<!DOCTYPE html>
					<html lang="en">
					<head>
						<meta charset="utf-8">
						<title>New Incident:'.$ticketID.' </title>
					</head>
					<body>
						<div class="wrapper">
						<p>
							Hello '.$name.',

							Your ticket: '.$ticketID.' has been created. A Security Team member has been notified and is working on your case.
						</p>
						<a href=https://localhost/SeniorProject/html/Login.html>Click here to login</a>
						</div>

					</body>
					</html>' ;

		    $mail->send();
		   // echo 'Message has been sent';
		} catch (Exception $e) {
		   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

	}

?>
