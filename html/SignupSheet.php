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
$token=bin2hex(random_bytes(5));
$is_verified=0;





$sql="insert into standard_user (f_name,l_name,password,email,token,is_verified) values('$fname','$lname','$password','$email','$token','$is_verified')";
$query=mysqli_query($con,$sql);

sendVerificationEmail($email,$fname,$token);

header('Location: http://localhost/SeniorProject/html/Post_reg.html')




?>
?>