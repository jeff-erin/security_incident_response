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

	<div class="News">
	<br><br>


	<h3>Recent News in Cybersecurity</h3>



	</div>





</body>
</html>