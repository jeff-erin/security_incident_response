
<html>
<header id=“head”>
	<title>Incidents - Need2Kno</title>
	<link rel="stylesheet" type="text/css" href="../css/IncidentsStyle.css">
	<h1>Need2Kno</h1>
	<br>
</header>
<body>


	<div class="nav">
		<a href='https://localhost/SeniorProject/html/Home_Standard.php'>Home</a>
  		<a class="selected" href='https://localhost/SeniorProject/html/Incidents.html'>Incidents</a>
  		<a href='https://localhost/SeniorProject/html/Ticket.html'>Report New Incident</a>
  		<input class="search" type=text placeholder="Search">
	</div>

	<div  class="open">
		<h3>Open Incidents</h3>
		<table>
			<tr>
				<th>Ticket ID</th>
				<th>Date Opened</th>
				<th>Classification</th>
				<th>Ticket Details</th>
			</tr>
			<?php

			session_start();
			$host='localhost';
			$user='root';
			$pass='';
			$db='Need2Kno';
			$uid = $_SESSION["uid"];



			$con=mysqli_connect($host,$user,$pass,$db);
				mysqli_select_db($con,$db);
			$sql = "SELECT ticket_id, date_created, Details, Classification FROM ticket WHERE user_id = '$uid' AND isOpen = True";

			$result = $con-> query($sql);

			if($result-> num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo "<tr><td>". $row["ticket_id"] ."</td><td>". $row["date_created"] ."</td><td>" . $row["Classification"] ."</td><td>". $row["Details"] ."</td></tr>";
				}
				echo "</table>";
			}


			?>
		</table>
	</div>
	

	<div class="closed">
		<h3>Previous Incidents</h3>
		<table>
			<tr>
				<th>Ticket ID</th>
				<th>Date Opened</th>
				<th>Classification</th>
				<th>Ticket Details</th>
			</tr>
			<?php
			$sql = "SELECT ticket_id, date_created, Details, Classification FROM ticket WHERE user_id = '$uid' AND isOpen = False";

			$result = $con-> query($sql);

			if($result-> num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo "<tr><td>". $row["ticket_id"] ."</td><td>". $row["date_created"] ."</td><td>" . $row["Classification"] ."</td><td>". $row["Details"] ."</td></tr>";
				}
				echo "</table>";
			}
			?>
		</table>
	</div>

</body>
</html>