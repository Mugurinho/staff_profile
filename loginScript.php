<?php
session_start();
include("dbConnect.php");
if(isset($_POST['Login'])){
		$username = $_POST['txtuser'];
		$password = sha1($_POST['txtpass']);
		
		//check the username, password
		$checkuser = "select * from User where Username='$username' AND Password='$password'";
		$run = mysqli_query($conn, $checkuser);
		if(mysqli_num_rows($run)>0){ 
			$_SESSION['Username'] = $username;  
				header("Location:index.php?username=" . $_SESSION['Username']);					
		} 
		else{
			echo "Username and/or password do not match! Try again!";
			header("Refresh:2; url=login.php");
		}
	}
mysqli_close($conn);
?>