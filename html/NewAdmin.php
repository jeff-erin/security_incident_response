<?php
 
require_once'emailController.php';


$host='localhost';
$user='root';
$pass='';
$db='Need2Kno';

$con=mysqli_connect($host,$user,$pass,$db);

$fname =mysqli_real_escape_string($con, $_POST['fname']);
$lname =mysqli_real_escape_string($con, $_POST['lname']);
$email=mysqli_real_escape_string($con, $_POST['email']);





$sql="insert into it_sec_user (f_name,l_name,password,email) values('$fname','$lname','N3wUs3r','$email')";
$query=mysqli_query($con,$sql);

newSecurityUser($email); //call function to send email to user

header('Location: http://localhost/SeniorProject/html/SysAdmin.html')




?>