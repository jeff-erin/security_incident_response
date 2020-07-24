<html>
<header id=“head”>
	<title>Open Incidents - Need2Kno</title>
	<link rel="stylesheet" type="text/css" href="../css/IncidentsStyle.css">
	<h1>Need2Kno</h1>
	<br>
</header>
<body>


	<div class="nav">
		<a href='https://localhost/SeniorProject/html/IT_Home.php'>Home</a>
  		<a class="selected" href='https://localhost/SeniorProject/html/IT_Incidents.php'>Open Incidents</a>
  		<a href='https://localhost/SeniorProject/html/SysAdmin.html'>System Administration</a>
  		<form action= "IT_Search.php" method="GET">
  				<input type="submit" name= "submit"
  				class="submit" value="GO">
  				<input type="text" name= "search"
  				class="search" placeholder="Search">
  				
  			</form>
	</div>
	<br><br>

	<div class="close">
	<form  action="CloseTicket.php" method="post">

			<label>Close a ticket by entering the ID# here</label>
				<input type="number" name="close" required autocomplete="off" /><br><br>
			
			
				<input type=submit>
	</form>
	<br><br>

	</div>

	<div class="srch">
		<h3>Your Search Results</h3>
	</div>

	<div  class="open">
		<h3>Assigned Incidents</h3>
		<table>
			<tr>
				<th>Ticket ID</th>
				<th>User ID</th>
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
			$sid = $_SESSION["sid"];



			$con=mysqli_connect($host,$user,$pass,$db);
				mysqli_select_db($con,$db);

			$search =$_GET['search'];
			
			$sql = "SELECT ticket_id, user_id, date_created, Details, Classification FROM ticket WHERE it_sec_id = '$sid' AND Classification LIKE '%$search%' AND isOpen = 1";

			$result = $con-> query($sql);

			if($result-> num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo "<tr><td>". $row["ticket_id"] ."</td><td>". $row["user_id"] ."</td><td>". $row["date_created"] ."</td><td>" . $row["Classification"] ."</td><td>". $row["Details"] ."</td>/tr>";
				}
				echo "</table>";
			}


			?>
		</table>
	</div>
	<br><br>

	<div class="open">
		<h3>All Open Incidents</h3>
		<table>
			<tr>
				<th>Ticket ID</th>
				<th>User ID</th>
				<th>Date Opened</th>
				<th>Classification</th>
				<th>Ticket Details</th>
			</tr>
			<?php

			$search =$_GET['search'];
			$sql = "SELECT ticket_id, user_id, date_created, Details, Classification FROM ticket WHERE Classification LIKE '%$search%' AND isOpen = 1";

			$result = $con-> query($sql);

			if($result-> num_rows > 0){
				while($row = $result-> fetch_assoc()){
					echo "<tr><td>". $row["ticket_id"] ."</td><td>". $row["user_id"] ."</td><td>". $row["date_created"] ."</td><td>" . $row["Classification"] ."</td><td>". $row["Details"] ."</td></tr>";
				}
				echo "</table>";
			}
			?>
		</table>
	</div>

</body>
</html>