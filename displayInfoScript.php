<?php
include("dbConnect.php");
$sql = "SELECT * FROM User WHERE Username = '$username'";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	 $username = $_SESSION['Username'];
	 $q = mysqli_query($conn,"SELECT * FROM User WHERE Username = '$username'");
    	while($row = mysqli_fetch_assoc($q)){
        if($row['Image'] == ""){
            echo '<div class="card" id="cardInfo" style="width: 20rem;">
                    <img width="200" height="230" class="card-img-top" src="img/user2.png">
                  </div>';
        } 
        else {
            echo "<div class='card' id='cardInfo' style='width: 20rem;'>
                   	<img width='200' height='230' class='card-img-top' src='img/".$row['Image']."'>
                  </div>";
        }
    }
		while ($row=mysqli_fetch_assoc($result)) {
      $profile = $row['Profile'];
      $image = $row['Image'];
		echo "<br><p>User ID: " . $row["UserID"] . "<p>Username: " . $row["Username"]  . "<p>Email: " . $row["Email"] . "<p>First name: " . $row["Fn"] . "<p>Last name: " . $row["Ln"] . "<p>Address: " . $row["Address"];
	}
}
else {
    echo "Query shows 0 results";
}
mysqli_close($conn);
?>