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

$query = "SELECT * FROM standard_user WHERE email = '$email'";
$qr = mysqli_query($con, $query);


	while($row = mysqli_fetch_assoc($qr)){
	$_SESSION['uid'] = $row['user_id'];
	$_SESSION['email'] = $row['email'];

	}



$result = mysqli_query($con,"select * from standard_user WHERE email = '$email' and password = '$password'") or die("Unable to query db".mysqli_error($con));

$var = mysqli_fetch_array($result);
if($var['password'] == $password){
	if($var['is_verified'] == 0){
	header('Location: http://localhost/SeniorProject/html/Verification.html');

	}
	else{
	echo "Login is a success!";
	header('Location: http://localhost/SeniorProject/html/Home_Standard.php');
	}
}
else{
	echo "Login Failed";
}

//function to check if user is verified
function verifyuser($token){
	$host='localhost';
	$user='root';
	$pass='';
	$db='Need2Kno';



	$con=mysqli_connect($host,$user,$pass,$db);
	mysqli_select_db($con,$db);

	$sql= "SELECT * FROM standard_user WHERE token= '$token' Limit 1";
	$result=mysqli_query($con,$sql);

	if(mysqli_num_rows($result)>0){
		$user=mysqli_fetch_assoc($result);
		$update_query="UPDATE standard_user SET is_verified=1 WHERE token='$token' ";
//if set to verified log them in 
		if(mysqli_query($con,$update_query)){

			$_SESSION['uid'] = $user['user_id'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['is_verified'] = 1;
			header('Location: http://localhost/SeniorProject/html/Home_Standard.php');
		}
	}
}

?>