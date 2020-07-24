<?php

require_once'emailController.php';

session_start();
$host='localhost';
$user='root';
$pass='';
$db='Need2Kno';

$classify =$_POST['classify'];
$details =$_POST['details'];
$open = True; 
$uid = $_SESSION['uid'];
$email = $_SESSION['email'];

$random = rand(2,4);

$con=mysqli_connect($host,$user,$pass,$db);

$sql="insert into ticket (Classification,Details,isOpen,user_id,it_sec_id) values('$classify','$details','$open','$uid','$random')";

$query=mysqli_query($con,$sql);

//query for security user email
$secSQL="SELECT * FROM it_sec_user WHERE it_sec_id= '$random' Limit 1";
$secquery=mysqli_query($con,$secSQL);

$secUser=mysqli_fetch_assoc($secquery);

$secEmail=$secUser['email'];

//echo $secEmail;


notifySecurity($secEmail, $email, $classify);//call function to notify security of assignment

//Security Playbook: different notification based on classification
if($classify == 'phishing'){
	openPhishingIncident($email);
}
else if($classify == 'malware'){
	openMalwareIncident($email);
}
else if($classify == 'quid'){
	openQuidIncident($email);

}
else{
	openIncidentEmail($email);
}

header('Location: http://localhost/SeniorProject/html/Post_ticket.html');

?>