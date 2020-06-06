<?php
 

require_once'emailController.php';

$host='localhost';
$user='root';
$pass='';
$db='Need2Kno';

//prevent sql injection
$fname = mysql_real_escape_string($_POST['fname']);
$lname = mysql_real_escape_string($_POST['lname']);
$password = mysql_real_escape_string($_POST['password']);
$email = mysql_real_escape_string($_POST['email']);

//encrypt password before entering into db
$password = md5($password);

$con=mysqli_connect($host,$user,$pass,$db);

$sql="insert into standard_user (f_name,l_name,password,email) values('$fname','$lname','$password','$email')";
$query=mysqli_query($con,$sql);

sendVerificationEmail($email);

echo "Congrats, $fname! You have succesfully registered for Need2Kno! </br>";

echo "<a href='https://localhost/SeniorProject/html/Login.html'>Click here to login</a>";




?>