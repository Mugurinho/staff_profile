<?php
include("dbConnect.php");
/*if and when the profile btn is clicked, User Info is displayed*/
if(isset($_GET['profile'])){
  $username = $_GET['profile'];
    $pro = "SELECT * FROM User WHERE Username = '$username'";
    $result=mysqli_query($conn, $pro);
      if(mysqli_num_rows($result)>0){
          while ($row=mysqli_fetch_assoc($result)){
            $profile = $row['Profile'];
            if($profile == 'public'){
              echo "<h3>User info</h3><div class='card' id='cardInfo' style='width: 20rem;'>
                              <img width='200' height='230' class='card-img-top' src='img/".$row['Image']."'>
                            </div>";
              echo "<br><p>Username: " . $row["Username"]  . "<p>Email: " . $row["Email"] . "<p>First name: " . $row["Fn"] . "<p>Last name: " . $row["Ln"] . "<p>Address: " . $row["Address"];
            }
            elseif($profile == 'private'){
              echo "</br>$username has set Profile: User info as private information</br>";
              echo "</br><img src='img/private.jpg'>";
            }
            else echo "</br>$username needs to update his User info access<hr>"; 
          }
      }
/*if and when the profile btn is clicked, User Bio is displayed*/
      $bio = "";
        $sql = "SELECT * FROM Bio WHERE Username = '$username'";
        $result=mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
            while ($row=mysqli_fetch_assoc($result)){
              $bioaccess = $row['BioAccess'];
              $bio = $row["Bio"];
                if($bioaccess == 'public'){
                    echo "<h3>Personal bio</h3><div class='form-group'>
                      <textarea readonly rows='9' cols='80' maxlength='1500' id='tbbio' name='txtbio' class='form-control' autofocus>$bio</textarea>
                    </div>";
                }
                elseif($bioaccess == 'private'){
                    echo "<hr>$username has set Profile: User bio as private information</br>";
                    echo "</br><img src='img/private.jpg'>";
            }
                 else echo "$username needs to update his User bio access<hr>";  
                
              }
            }
          else echo "<h3>Personal bio alert</h3><div class='form-group'>
                      <input type='text' readonly id='tbbio' name='txtbio' placeholder='No personal bio has been added yet by $username' class='form-control' autofocus/>
                    </div>";
}
mysqli_close($conn);
?>