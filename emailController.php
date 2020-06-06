<?php

require_once 'vendor/autoload.php';



// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.org', 465,'ssl'))
  ->setUsername('NOREPLYNeed2Kno@gmail.com')
  ->setPassword('3^04QJr*I')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);


funcion sendVerificationEmail($userEmail)
{
	global $mailer;
	$verificationBody = '<!DOCTYPE html>
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
		<a href="https://localhost/SeniorProject/html/Login.html>Click here to login
		</a>
	</div>

</body>
</html>';


// Create a message
$message = (new Swift_Message('New Need2Kno Account Registration'))
  ->setFrom([''NOREPLYNeed2Kno@gmail.com'' => 'Need2Kno'])
  ->setTo($userEmail)
  ->setBody($verificationBody,'text/html');

// Send the message
$result = $mailer->send($message);

}

?> 