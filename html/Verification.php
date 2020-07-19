<?php

require_once'Login.php';

readfile('Verification.html');

if(isset($_GET['token'])){
	$token=$_GET['token'];
	verifyuser(token);
}

?>