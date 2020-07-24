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
		<a class="selected" href='https://localhost/SeniorProject/html/Home_Standard.php'>Home</a>
  		<a href='https://localhost/SeniorProject/html/Incidents.php'>Incidents</a>
  		<a href='https://localhost/SeniorProject/html/Ticket.html'>Report New Incident</a>
  			<form action= "Search.php" method="GET">
  				<input type="submit" name= "submit"
  				class="submit" value="GO">
  				<input type="text" name= "search"
  				class="search" placeholder="Search">
  				
  			</form>
	</div>

	<div class="News">
	<br><br>


	<h3>Cybersecurity News and Tips</h3>
	<h4>Some friendly Reminders:</h4>
	<p>
		- Always report any suspicous activity
		<br>
		- Bring any unidentified USB sticks to the IT Department
		<br>

		- Never let an unrecognized employee into the building without verifying their identity
		<br>
		- Stay up to date on your general CyberSecurity training
		<br>
	</p>

	<h3>Noteable Breaches in the last year: </h3>
	<p>
		
		<h5>November 22, 2019: T-Mobile</h5>
		 Over one million records compromised containing consumer data. No financial data was obtained.

		<br><br>
		<h5>November 16, 2019: Disney+</h5>
		Disney Plus subscribers locked out of their accounts. Subscriptions made available on the dark web at reduced prices.
		<br><br>

		<h5>September 27, 2019: DoorDash</h5>
		4.9 million customers and employees exposed. Both personal and account information obtained in the breach.



	</p>



	</div>





</body>
</html>