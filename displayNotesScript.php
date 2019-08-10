<?php 
include("dbConnect.php");
$sql = "SELECT * FROM Notes WHERE Username = '".$username."' ORDER BY DatePost DESC LIMIT 5";
$result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0){
      // output data of each row
      while($row = mysqli_fetch_assoc($result)){
        $noteId = $row['NoteID'];
      			echo "<tr>";
      				echo "<td>".$row["Username"]."</td>";
                    	echo "<td>".$row["Subject"]."</td>";
                    	echo "<td>".$row['Note']."</td>";
                    	echo "<td>".$row['DatePost']."</td>";
                  echo "</tr>";
          /*echo "<p>Username: " . $row["Username"]. "<p>Subject: " . $row["Subject"]. "<p>Note: " . $row["Note"]. "<p>Date: " . $row["DatePost"]. "<hr>";*/
      }
  } 
  else{
      echo "<p id='nodata'>" . "No notes recorded yet" . "</p>";
  }
mysqli_close($conn);		
?>