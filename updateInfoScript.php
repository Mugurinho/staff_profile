<?php
include("dbConnect.php");
/*display info script in order for the accordionUpdate page to display the recorded info from the database inside textboxes*/
$fn = $ln = $email = $address = $file = $profile = "";
$sql = "SELECT * FROM User where Username = '".$username."'";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
   $username = $_SESSION['Username'];
    }
    while ($row=mysqli_fetch_assoc($result)){
      $email =  $row["Email"];
      $fn =  $row["Fn"];
      $ln =  $row["Ln"];
      $address = $row["Address"];
      $profile = $row["Profile"];
      $file = $row['Image'];
      if($row['Image'] == ""){
            echo '<div class="card" style="width: 20rem;">
                    <img width="200" height="230" class="card-img-top" src="img/user2.png">
                  </div>';
        } 
        else {
            echo "<div class='card' style='width: 20rem;''>
                    <img width='200' height='230' class='card-img-top' src='img/".$row['Image']."'>
                  </div>";
        }
  }
/*update info script*/
if(isset($_POST['Update'])){
	 if (isset($_POST["fn"])) {
	 	$fn = $_POST['fn'];
	 }
	 if (isset($_POST["ln"])) {
	 	$ln = $_POST['ln'];
	 }
	 if (isset($_POST["email"])) {
	 	$email = $_POST['email'];

	 }
	 if (isset($_POST["address"])) {
	 	$address = $_POST['address'];
	 }

   if (isset($_POST["file"])) {
    $file = $_POST['file'];
   }

   if(isset($_POST['Select'])){
    $profile = $_POST['Select'];
   }

$sql = "UPDATE User SET Email = '$email', Fn = '$fn', Ln = '$ln', Address = '$address', Image = '$file', Profile = '$profile' WHERE Username = '".$username."'";
if (mysqli_query($conn, $sql)) {
	 $username = $_SESSION['Username'];
     echo "Records updated successfully";
     echo "<br />";
} 
else {
    echo "Error updating record: " . mysqli_error($conn);
}

move_uploaded_file($_FILES['file']['tmp_name'],"img/".$_FILES['file']['name']);
  $q = mysqli_query($conn,"UPDATE User SET Image = '".$_FILES['file']['name']."' WHERE Username = '".$_SESSION['Username']."'");
  $q = mysqli_query($conn,"SELECT * FROM User WHERE Username = '".$username."'");
    while($row = mysqli_fetch_assoc($q)){
        if($row['Image'] == ""){
            echo '<div class="card" style="width: 20rem;">
                    <img width="200" height="230" class="card-img-top" src="img/user2.png">
                  </div>';
        } 
        else {
            echo "<div class='card' style='width: 20rem;'>
                   	<img width='200' height='230' class='card-img-top' src='img/".$row['Image']."'>
                  </div>";
        }
    }
    header('Location: updateInfo.php');
}
mysqli_close($conn);
?>