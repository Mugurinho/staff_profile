<?php
include("dbConnect.php");
$output = '';
if(isset($_POST["query"])){
 $search = mysqli_real_escape_string($conn, $_POST["query"]);
 $query = "SELECT * FROM User WHERE Username LIKE '%".$search."%'"; /*search and display all data when username is typed in*/
}
else{
 $query = "SELECT * FROM User ORDER BY Username"; /*display all data alphabetically*/
}
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
 $output .= '<div class="table-responsive">
               <table class="table table bordered">
                <tr id="column_name">
                 <th>Username</th>
                 <th>Email</th>
                 <th>First name</th>
                 <th>Last name</th>
                 <th>Address</th>
                 <th>Image</th>
                 <th>Access</th>
                 <th>Profile</th>
                </tr>';
while($row = mysqli_fetch_array($result)){
$username = $row['Username'];
$email = $row['Email'];
$fn = $row['Fn'];
$ln = $row['Ln'];
$address = $row['Address'];
$access = $row['Profile'];
$image = $row['Image'];
  $output .= '<tr id="data">
    <td>'.$username.'</td>
    <td>'.$email.'</td>
    <td>'.$fn.'</td>
    <td>'.$ln.'</td>
    <td>'.$address.'</td>
    <td>'.$image.'</td>
    <td>'.$access.'</td>
    <td>' . "<a href = generalInfo.php?profile=$username class='btn btn-danger btn-xs' role='button'>Profile</a>".'</td>
   </tr>';
}
    echo $output;
}
else{
 echo '<p id="nodata">Data Not Found</p>';
}


mysqli_close($conn);
?>
