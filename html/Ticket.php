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

echo $classify;

$con=mysqli_connect($host,$user,$pass,$db);

$sql="insert into ticket (Classification,Details,isOpen,user_id) values('$classify','$details','$open','$uid')";
$query=mysqli_query($con,$sql);

//Security Playbook
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