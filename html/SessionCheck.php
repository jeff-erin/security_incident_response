<?php
session_start();
$host='localhost';
$user='root';
$pass='';
$db='Need2Kno';

$email= $_POST['email'];
$password= $_POST['pass'];


$con=mysqli_connect($host,$user,$pass,$db);
mysqli_select_db($con,$db);

if ( isset( $_SESSION['user_id'] ) ) {

} else {
    header("Login.html");
}
?>