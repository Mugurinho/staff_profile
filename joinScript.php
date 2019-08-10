<?php 
session_start(); 
include("dbConnect.php");
	if(isset($_POST['Join'])){
		$username = ($_POST['txtuser']);
		$password = sha1($_POST['txtpass']);
		$email = $_POST['txtemail'];
		$fn = $_POST['txtfn'];
		$ln = $_POST['txtln'];
		$address = $_POST['txtaddress'];
						//check for duplicate emails first
						$check_email = "select * from User where Email = '$email'";
						$run = mysqli_query($conn, $check_email);
							if(mysqli_num_rows($run)>0){ //checks the table rows based on $run variable
								echo "Email already registered, try again";
								exit();
							}
						//check for duplicate usernames second
						$check_username = "select * from User where Username = '$username'";
						$run = mysqli_query($conn, $check_username);
							if(mysqli_num_rows($run)>0){
								echo "Username already registered, try again";
								exit();
							}
					
					$insert = "insert into User (Username, Password, Email, Fn, Ln, Address) values ('$username', '$password', '$email', '$fn', '$ln', '$address')";
					if(mysqli_query($conn, $insert)){
					$_SESSION['Username'] = $username;
					$_SESSION['Email'] = $email;
					echo "Registration successful, you will be re-directed to the Login page in 3 seconds";
					header("Refresh:3; url=login.php");
					die;					
					}
					}
					mysqli_close($conn);		
?>