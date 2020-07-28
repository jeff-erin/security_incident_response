<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	require 'src/Exception.php';
	require 'src/PHPMailer.php';
	require 'src/SMTP.php';

	// Load Composer's autoloader
	//require_once 'vendor/autoload.php';


	//email Verification
	function sendVerificationEmail($userEmail,$fname,$token)
	{

	

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
							Hello '.$fname.',
						<p>
						<p>
							This Email address has been used to register a new Need2Kno account.
							If this is valid, Thank you for registering and please click the link below to verify your registration to our site.
						</p>
						<a href=https://localhost/SeniorProject/html/Verification.php?token='.$token.'>Click here to verify</a>
						</div>

					</body>
					</html>' ;

		    $mail->send();
		   // echo 'Message has been sent';
		} catch (Exception $e) {
		   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

	}

//new security user notification
function newSecurityUser($userEmail)
	{

	

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
							Hello,
						<p>
						<p>
							This Email address has been used to register a new Need2Kno account.
							If this is valid, Thank you for registering and please click the link below to login to our site.
						</p>
						<a href=https://localhost/SeniorProject/html/IT_Login.html>Click here to login</a>
						</div>

					</body>
					</html>' ;

		    $mail->send();
		   // echo 'Message has been sent';
		} catch (Exception $e) {
		   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

	}

//Notify Assigned team member of new ticket
	function notifySecurity($securityEmail, $userEmail, $category, $ticket_id)
	{

	

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
		    $mail->addAddress($securityEmail);     // Add a recipient
		
		    // Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    // Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = 'New Need2Kno Incident Assigned to You';
		    $mail->Body    = '<!DOCTYPE html>
					<html lang="en">
					<head>
						<meta charset="utf-8">
						<title>New Incident </title>
					</head>
					<body>
						<div class="wrapper">
						<p>
							Hello,

						<p>
						<p>

							Ticket ID: #'.$ticket_id.'
						<p> 

							A new '.$category.' ticket from user '.$userEmail.' has been assigned to you. Please log in and review the incident promptly.


						</p>
						<a href=https://localhost/SeniorProject/html/IT_Login.html>Click here to login</a>
						</div>

					</body>
					</html>' ;

		    $mail->send();
		   // echo 'Message has been sent';
		} catch (Exception $e) {
		   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}

	}



	//New General Incident
	function openIncidentEmail($userEmail)
	{

	

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
		    $mail->Subject = 'New Need2Kno Incident Opened';
		    $mail->Body    = '<!DOCTYPE html>
					<html lang="en">
					<head>
						<meta charset="utf-8">
						<title>New Incident </title>
					</head>
					<body>
						<div class="wrapper">
						<p>
							Hello,

						<p>
						<p>

							Your ticket has been created. A Security Team member has been notified and is working on your case.
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

//notify user incident has been closed
function closedIncidentEmail($userEmail,$ticketID)
	{

	

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
		    $mail->Subject = 'Need2Kno Incident Closed';
		    $mail->Body    = '<!DOCTYPE html>
					<html lang="en">
					<head>
						<meta charset="utf-8">
						<title>New Incident </title>
					</head>
					<body>
						<div class="wrapper">
						<p>
							Hello,

						<p>
						<p>

							Your ticket #'.$ticketID.' has been closed. Contact your IT Security team if you feel this is an error.
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


		//New Phishing Incident
	function openPhishingIncident($userEmail)
	{


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
		    $mail->Subject = 'New Need2Kno Incident Opened';
		    $mail->Body    = '<!DOCTYPE html>
					<html lang="en">
					<head>
						<meta charset="utf-8">
						<title>New Incident </title>
					</head>
					<body>
						<div class="wrapper">
						<p>
							Hello ,
						<p>
	

							Your ticket has been created. A Security Team member has been notified and is working on your case.

							You reported a possible phishing incident. If you entered your credentials, please change your password promptly. 
						<p>
							For more information and tips on how to spot a phishing email please refer to the Need2Kno Homepage.
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



		//New Malware Incident
	function openMalwareIncident($userEmail)
	{


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
		    $mail->Subject = 'New Need2Kno Incident Opened';
		    $mail->Body    = '<!DOCTYPE html>
					<html lang="en">
					<head>
						<meta charset="utf-8">
						<title>New Incident </title>
					</head>
					<body>
						<div class="wrapper">
						<p>
							Hello,

							Your ticket has been created. A Security Team member has been notified and is working on your case.
							You reported a malware incident. While the Security Team is working on this incident, you should:
						<p>

							1.Disconnect your machine from the Internet
						<p>
							2.Avoid logging into any accounts
						<p>
							3.Check your machines activity monitor and end any suspicious processes that have high CPU
							
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

			//New Qpq Incident
	function openQuidIncident($userEmail)
	{


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
		    $mail->Subject = 'New Need2Kno Incident Opened';
		    $mail->Body    = '<!DOCTYPE html>
					<html lang="en">
					<head>
						<meta charset="utf-8">
						<title>New Incident </title>
					</head>
					<body>
						<div class="wrapper">
						<p>
							Hello ,

							Your ticket has been created. A Security Team member has been notified and is working on your case.
						<p>

							You reported a possible Quid Pro Quo incident. If you entered your credentials, please change your password promptly. Some good security measure tips include:
						<p>
							1. Never give personal or account information unless you initiated the exchange.
						<p>
							2. Always call the company back using the company’s phone number available via their website. DO not call through a phone number provided by the person you were conversing with.
						<p>
							3. If you’re at all suspicious about the email, a wise attempt would be to report it.
						<p>
							4. Modify your password regularly.  
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
