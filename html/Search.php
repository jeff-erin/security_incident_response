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
  		<a class="selected" href='https://localhost/SeniorProject/html/Incidents.php'>Incidents</a>
  		<a href='https://localhost/SeniorProject/html/Ticket.html'>Report New Incident</a>
  			<form action= "Search.php" method="GET">
  				<input type="submit" name= "submit"
  				class="submit" value="GO">
  				<input type="text" name= "search"
  				class="search" placeholder="Search">
  				
  			</form>
	</div>

	<div class="srch">
		<h3>Your Search Results</h3>

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

			$search =$_GET['search'];



			$con=mysqli_connect($host,$user,$pass,$db);
				mysqli_select_db($con,$db);
			$sql = "SELECT ticket_id, date_created, Details, Classification FROM ticket WHERE user_id = '$uid' AND Classification LIKE '%$search%' AND isOpen = True";

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

			$search =$_GET['search'];

			$sql = "SELECT ticket_id, date_created, Details, Classification FROM ticket WHERE user_id = '$uid' AND Classification LIKE '%$search%' AND isOpen = False";

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