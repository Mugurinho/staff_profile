<?php session_start();
if(isset($_SESSION['Username'])){
    $username = $_SESSION['Username'];
}
//if no existing session, user logged out
if(!isset($_SESSION['Username'])){
  header("Location: login.php");
  return;
  echo $_SESSION['Username'];
}
include("dbConnect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head id = "newbody" onload="myFunction()">
  <title>Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php include 'navMenu.php';?>
  <p id = "userlogin">Welcome, &nbsp;<?php echo $_SESSION ['Username'];?>&nbsp;<a id = "userlogout" href="logout.php">Logout</a></p>
<div class="container" id = "network">
    <div class="col-md-5 form-group">
      <h3>Update user</h3>
        <form role="form" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
           <?php include 'updateInfoScript.php';?>
          <div class="form-group">
              <input type="hidden"  name="un" class="form-control" disabled value=<?php echo $_SESSION ['Username'];?>>
          </div>
          <div class="form-group">
              <input type="email" id="fn" name="email" class="form-control" data-toggle="tooltip" data-placement="top" title="Update email" placeholder="Email" value="<?php echo $email;?>">
          </div>
          <div class="form-group">
              <input type="text" id="fn" name="fn" class="form-control" data-toggle="tooltip" data-placement="top" title="Update first name"placeholder="First name" value="<?php echo $fn;?>">
          </div>
          <div class="form-group">
              <input type="text" id="ln" name="ln" class="form-control" data-toggle="tooltip" data-placement="top" title="Update last name" placeholder="Last name" value="<?php echo $ln;?>">
          </div>
          <div class="form-group">
              <input type="text" id="fn" name="address" class="form-control" data-toggle="tooltip" data-placement="top" title="Update address" placeholder="Address" value="<?php echo $address;?>">
          </div>
          <div class="form-group">
              <input type="file" id="fn" name="file" class="form-control" data-toggle="tooltip" data-placement="top" title="Update profile picture" required value="<?php echo $file;?>">
          </div>
         <div class="form-group">
            <select class="form-control" id="sel" name="Select" required>
              <option value="public">Set as public profile</option>
              <option value="private">Set as private profile</option>
            </select>
          </div>
          <div>
            <input type="submit" id="btn" class="btn btn-default" name="Update" value="Update">
          </div>
        </form>
       <br>
      </div>
  </div>
<br>
</body>
</html>