<?php 
include("dbConnect.php");
if(isset($_GET['fileid'])){
   $fileid = $_GET['fileid']; 
      $query = "SELECT * FROM Files WHERE Username = '$username' AND FileID = '$fileid'";
      $result1 = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($result1);
      $_SESSION['Username'] = $username;
        $file = $row['File'];
        $title = $row['Title'];
        $description = $row['Description'];
        $fileid = $row['FileID'];
        $filename = $row['FileName'];
          $filename  = $_FILES['userfile']['tmp_name'];
          header('Content-Type:application/pdf');
          header("Content-Disposition: attachment; filename=$filename");
          echo($file);
} 
else{
    echo "Data Missing!";
}
$sql = "SELECT * FROM Files WHERE Username = '$username'";
$result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
        $fileid = $row['FileID'];
        $_SESSION['Username'] = $username;
        $file = $row['File'];
        $title = $row['Title'];
        $description = $row['Description'];
        $filename = $row['FileName'];
      			echo "<tr>";
      				        echo "<td>".$row["FileName"]."</td>";
                      echo "<td>".$row["Title"]."</td>";
                      echo "<td>". "<img src='img/pdf-page.png' id='pdf'>" ."</td>";
                      echo "<td>". "<a href = displayFiles.php?file=$fileid download='$filename' class='btn btn-default btn-sm'><span class='glyphicon glyphicon-cloud-download'></span> Download</a>" . "</td>";
            echo "</tr>";
      }
  } 
  else{
      echo "<p id='nodata'>" . "No files uploaded yet" . "</p>";
  }
mysqli_close($conn);		
?>