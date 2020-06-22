<?php

$host='localhost';
$user='root';
$pass='';
$db='Need2Kno';

$con=mysqli_connect($host,$user,$pass,$db);
mysqli_select_db($con,$db);

//prevent sql injection
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['pass']);

//encrypt password before comparison
$password =md5($password);

$result = mysqli_query($con,"select * from standard_user where email = '$email' and password = '$password'") or die("Unable to query db".mysqli_error($con));

$var = mysqli_fetch_array($result);
if($var['password'] == $password){
	echo "Login is a success!";
	header('Location: http://localhost/SeniorProject/html/Home.html');
}
else{
	echo "Login Failed";
}



?>