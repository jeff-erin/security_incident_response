<?php
 



$host='localhost';
$user='root';
$pass='';
$db='Need2Kno';

$fname =$_POST['fname'];
$lname =$_POST['lname'];
$password =$_POST['password'];;
$email=$_POST['email'];



$con=mysqli_connect($host,$user,$pass,$db);

$sql="insert into standard_user (f_name,l_name,password,email) values('$fname','$lname','$password','$email')";
$query=mysqli_query($con,$sql);

echo "Congrats, $fname! You have succesfully registered for Need2Kno! </br>";

echo "<a href='https://localhost/SeniorProject/html/Login.html'>Click here to login</a>";




?>