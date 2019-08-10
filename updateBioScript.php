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
      $bioaccess = $row['BioAccess'];
    }

/*update user*/
if(isset($_POST['UpdateBio'])){
   $bio = ($_POST['txtbio']);
    if (isset($_POST["txtbio"])){
    $bio = $_POST['txtbio'];
    }
    if(isset($_POST['Select'])){
      $bioaccess = $_POST['Select'];
}
      $update = "UPDATE Bio SET Bio = '$bio', BioAccess = '$bioaccess' WHERE Username = '$username'";
        if (mysqli_query($conn, $update)) {
           $username = $_SESSION['Username'];
             echo "<p>Personal bio updated successfully" . "</p>";
             header("Refresh:1; url=updateBio.php");
             die;
        } 
        else {
            echo "Error updating personal bio: " . mysqli_error($conn);
        }
      }

mysqli_close($conn);    
?>