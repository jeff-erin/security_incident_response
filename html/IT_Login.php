<?php

//require_once'Verification.html';


session_start();
$host='localhost';
$user='root';
$pass='';
$db='Need2Kno';



$con=mysqli_connect($host,$user,$pass,$db);
mysqli_select_db($con,$db);

$email= mysqli_real_escape_string($con, $_POST['email']);
$password= mysqli_real_escape_string($con, $_POST['pass']);

//$password =md5($password);

$query = "SELECT * FROM it_sec_user WHERE email = '$email'";
$qr = mysqli_query($con, $query);


	while($row = mysqli_fetch_assoc($qr)){
	$_SESSION['sid'] = $row['it_sec_id'];
	$_SESSION['email'] = $row['email'];

	}



$result = mysqli_query($con,"select * from standard_user WHERE email = '$email' and password = '$password'") or die("Unable to query db".mysqli_error($con));

$var = mysqli_fetch_array($result);
if($var['password'] == $password){
	echo "Login is a success!";
	header('Location: http://localhost/SeniorProject/html/IT_Home.php');
	
}
else{
	echo "Login Failed";
}


?>