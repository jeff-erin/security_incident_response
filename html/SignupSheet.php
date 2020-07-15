<?php
 

require_once'emailController.php';

$host='localhost';
$user='root';
$pass='';
$db='Need2Kno';

$con=mysqli_connect($host,$user,$pass,$db);

$fname =mysqli_real_escape_string($con, $_POST['fname']);
$lname =mysqli_real_escape_string($con, $_POST['lname']);
$password =mysqli_real_escape_string($con, $_POST['password']);
$email=mysqli_real_escape_string($con, $_POST['email']);





$sql="insert into standard_user (f_name,l_name,password,email) values('$fname','$lname','$password','$email')";
$query=mysqli_query($con,$sql);

sendVerificationEmail($email,$fname);

header('Location: http://localhost/SeniorProject/html/Post_reg.html')




?>