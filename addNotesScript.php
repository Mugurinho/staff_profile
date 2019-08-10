<?php 
include("dbConnect.php");
	if(isset($_POST['Note'])){
		$subject = $_POST['txtsubject'];
		$note = $_POST['txtnote'];
		$date = date('Y-m-d H:i:s');
					$insert = "INSERT INTO Notes (Subject, Note, DatePost, Username, UserID) VALUES ('$subject', '$note', '$date', '$username', '$userID')";
					if(mysqli_query($conn, $insert)){
					$_SESSION['Username'] = $username;
					$_SESSION['UserID'] = $userID;
					echo "Note has been recorded";
					header("Refresh:1; url=addNotes.php");				
					}
	}
mysqli_close($conn);		
?>