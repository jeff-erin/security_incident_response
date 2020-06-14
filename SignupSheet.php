<?php
 

require_once'emailController.php';

$host='localhost';
$user='root';
$pass='';
$db='Need2Kno';


$con=mysqli_connect($host,$user,$pass,$db);

//prevent sql injection
$fname = mysqli_real_escape_string($con, $_POST['fname']);
$lname = mysqli_real_escape_string($con, $_POST['lname']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$email = mysqli_real_escape_string($con, $_POST['email']);

//encrypt password before entering into db
$password = md5($password);

$sql="insert into standard_user (f_name,l_name,password,email) values('$fname','$lname','$password','$email')";
$query=mysqli_query($con,$sql);

sendVerificationEmail($email);

echo "Congrats, $fname! You have succesfully registered for Need2Kno! </br>";

echo "<a href='https://localhost/SeniorProject/html/Login.html'>Click here to login</a>";




?>