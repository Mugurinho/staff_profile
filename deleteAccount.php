<?php
include("dbConnect.php");
$username = $_SESSION['Username'];
if(isset($_POST['Delete'])){
$sql = "DELETE FROM User WHERE Username = '".$username."'";
if (mysqli_query($conn, $sql)) {
	 $username = $_SESSION['Username'];
	 	echo "<p style='color:white;'>" . "Your account has been erased and you will be logged out in 5 seconds" . "</p>";
	 	header("Refresh:5; url=logout.php"); /*user is logged out after deleting records*/
	 	die;
} 
else {
	echo "<p style='color:white;'>" . "Records not deleted" . "</p>";
    header('Location: manageAccount.php');
}
}
mysqli_close($conn);
?>