<?php
session_start();

if ( isset( $_SESSION['user_id'] ) ) {

} else {
    header("Login.html");
}
?>
<html>
<header id=“head”>
	<title>Home - Need2Kno</title>
	<link rel="stylesheet" type="text/css" href="../css/HomeStandardStyle.css">
	<h1>Need2Kno</h1>
	<br>
	</header>
	<body>


	<div class="nav">
		<a class="selected" href='https://localhost/SeniorProject/html/Home_Standard.html'>Home</a>
  		<a href='https://localhost/SeniorProject/html/Incidents.php'>Incidents</a>
  		<a href='https://localhost/SeniorProject/html/Ticket.html'>Report New Incident</a>
  		<input class="search" type=text placeholder="Search">
	</div>
	<br><br>

	<div class="News">
	<br><br>


	<h3>CyberSecurity News and Tips: </h3>
	<p>
		- Always report any suspicous activity
		<br><br>
		- Bring any unidentified USB sticks to the IT Department
		<br><br>

		- Never let an unrecognized employee into the building without verifying their identity
		<br><br>
		- Stay up to date on your general cybersecurity training
		<br><br>
	</p>


	<br><br>
	<h3>Noteable Breaches in the last year: </h3>
	<p>
		
		November 22, 2019: T-Mobile: <br>
		 Over one million records compromised containing consumer data. No financial data was obtained.

		<br><br>
		November 16, 2019: Disney+: <br>
		Disney Plus subscribers locked out of their accounts. Subscriptions made available on the dark web at reduced prices.
		<br><br>

		September 27, 2019: DoorDash: <br>
		4.9 million customers and employees exposed. Both personal and account information obtained in the breach.



	</p>



	</div>





</body>
</html>