
<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$db='Need2Kno';
$close =$_POST['close'];

$con=mysqli_connect($host,$user,$pass,$db);


$sql="UPDATE ticket SET isOpen = 0 WHERE ticket_id = '$close'";

$query=mysqli_query($con,$sql);


header('Location: http://localhost/SeniorProject/html/IT_Incidents.php');
?>