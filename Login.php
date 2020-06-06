<?php

$host='localhost';
$user='root';
$pass='';
$db='Need2Kno';

//prevent sql injection
$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['pass']);

//encrypt password before comparison
$password =md5($password);


$con=mysqli_connect($host,$user,$pass,$db);
mysqli_select_db($con,$db);

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