<?php
	session_start();
	session_destroy();
	setcookie("Username", "", time()-7200);
	header('Location: login.php');
	die;
	
?>