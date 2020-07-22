<?php
 


$host='localhost';
$user='root';
$pass='';
$db='Need2Kno';

$con=mysqli_connect($host,$user,$pass,$db);


$remove=mysqli_real_escape_string($con, $_POST['remove']);





$sql="DELETE FROM it_sec_user WHERE email = '$remove'";
$query=mysqli_query($con,$sql);


header('Location: http://localhost/SeniorProject/html/SysAdmin.html')




?>