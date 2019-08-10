<?php
include("dbConnect.php");
/*switched delete block with select in order to avoid Header errors*/
if(isset($_GET['delete'])){
  $NoteID = $_GET['delete'];
          $del = "DELETE FROM Notes WHERE NoteID = '$NoteID'";
          if (mysqli_query($conn, $del)) {
             $username = $_SESSION['Username'];
             echo "Note has been deleted";
             header("Refresh:1; url=manageNotes.php");
          }
          else {
                echo "Note has not been deleted";
                die;
              }
}

$sql = "SELECT * FROM Notes WHERE Username = '".$username."' ORDER BY DatePost DESC";
$result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0){
      // output data of each row
      while($row = mysqli_fetch_assoc($result)){
        $noteId = $row['NoteID'];
            echo "<tr>";
              echo "<td>".$row["Username"]."</td>";
                      echo "<td>".$row["Subject"]."</td>";
                      echo "<td>".$row['Note']."</td>";
                      echo "<td>".$row['NoteID']."</td>";
                      echo "<td>".$row['DatePost']."</td>";
                      /*echo "<td>". "<input type='submit' class='btn btn-danger btn-xs' title='$noteId' name='delete' value='delete'>" ."</td>";*/
                      echo "<td>". "<a href = manageNotes.php?delete=$noteId class='btn btn-danger btn-xs' role='button'>Delete</a>";
                  echo "</tr>";
          /*echo "<p>Username: " . $row["Username"]. "<p>Subject: " . $row["Subject"]. "<p>Note: " . $row["Note"]. "<p>Date: " . $row["DatePost"]. "<hr>";*/
      }
  } 
  else{
      echo "<p id='nodata'>" . "No notes recorded yet" . "</p>";
  }
mysqli_close($conn);
?>