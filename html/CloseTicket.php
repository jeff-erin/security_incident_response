
<?php
require_once'emailController.php';

session_start();
$host='localhost';
$user='root';
$pass='';
$db='Need2Kno';
$close =$_POST['close'];

$con=mysqli_connect($host,$user,$pass,$db);


$sql="UPDATE ticket SET isOpen = 0 WHERE ticket_id = '$close'";

$query=mysqli_query($con,$sql);//update ticket status

$ticketSQL="SELECT * FROM ticket WHERE ticket_id= '$close' Limit 1";

$ticketquery=mysqli_query($con,$ticketSQL);

$TicketInfo=mysqli_fetch_assoc($ticketquery);


$id=$TicketInfo['user_id'];//get user ID

$userSQL="SELECT * FROM standard_user WHERE user_id= '$id' Limit 1";

$userquery=mysqli_query($con,$userSQL);//update ticket status

$UserInfo=mysqli_fetch_assoc($userquery);

$userEmail=$UserInfo['email'];//get user email

closedIncidentEmail($userEmail,$close);//call function to notify user

//echo $userEmail;
//echo $close;

header('Location: http://localhost/SeniorProject/html/IT_Incidents.php');
?>