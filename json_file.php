<?php
include("dbConnect.php");
    $pro = "SELECT * FROM User";
    $result=mysqli_query($conn, $pro);
      if(mysqli_num_rows($result)>0){
          while ($row=mysqli_fetch_assoc($result)){
              echo "<br><p>Username: " . $row["Username"]  . "<p>Email: " . $row["Email"] . "<p>First name: " . $row["Fn"] . "<p>Last name: " . $row["Ln"] . "<p>Address: " . $row["Address"] . "<hr>";
            } 
      }
      $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
mysqli_close($conn);
?>