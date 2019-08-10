<?php 
include("dbConnect.php");
/*manage with accordionUpdate in terms of headers and refresh to urls*/
/*display user bio*/
$bio = "";
$sql = "SELECT * FROM Bio WHERE Username = '$username'";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
   $username = $_SESSION['Username']; 
    }
    while ($row=mysqli_fetch_assoc($result)){
      $bio = $row["Bio"];
      echo "<p>Personal bio already added, re-directing to Update" . "</p>";
      header("Refresh:1.5; url=updateBio.php"); 
      die;
    }

/*insert user bio*/
  if(isset($_POST['AddBio'])){
    if (isset($_POST["txtbio"])){
    $bio = $_POST['txtbio'];
    }
    if(isset($_POST['Select'])){
    $bioaccess = $_POST['Select'];
}
    /*$check_bio = "SELECT * FROM Bio WHERE Bio = '$bio'";
            $run = mysqli_query($conn, $check_bio);
              if(mysqli_num_rows($run)>0){ //checks the table rows based on $run variable for existant bio; yet to be reviewed;
                header("Refresh:2; url=updateInfo.php");
                die;
              }*/
    
      $insert = "INSERT INTO Bio (Bio, Username, BioAccess) VALUES ('$bio', '$username', '$bioaccess')";
          if(mysqli_query($conn, $insert)){
          $username = $_SESSION['Username'];
          echo "Personal bio has been added";
          header("Refresh:1; url=updateBio.php");
          }
  }
mysqli_close($conn);    
?>