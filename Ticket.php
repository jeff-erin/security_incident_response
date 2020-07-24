<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$db='Need2Kno';

$classify =$_POST['classify'];
$details =$_POST['details'];
$open = True; 
$uid = $_SESSION['uid'];

$random = rand(2,4);

$con=mysqli_connect($host,$user,$pass,$db);

$sql="insert into ticket (Classification,Details,isOpen,user_id,it_sec_id) values('$classify','$details','$open','$uid','$random')";

$query=mysqli_query($con,$sql);


header('Location: http://localhost/SeniorProject/html/Post_ticket.html');

?>