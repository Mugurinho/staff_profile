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
<head>
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
<div class="container" id = "join">
    <div class="col-md-6 form-group">
      <h3>Upload files</h3>
        <form role="form" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
           <?php include 'addFilesScript.php';?>
          <div class="form-group">
              <input type="hidden"  name="un" class="form-control" disabled value=<?php echo $_SESSION ['Username'];?>>
          </div>
          <div class="form-group">
              <input type="text" id="ft" name="ft" class="form-control" required placeholder="File title">
          </div>
          <div class="form-group">
              <textarea rows="9" cols="80" maxlength="1500" id="fd" name="fd" class="form-control" placeholder="Write a max of 1500 letters description here..." required></textarea>
          </div>
          <div class="form-group">
              <input type="hidden" name="MAX_FILE_SIZE" value="6000000">
              <input type="file" id="userfile" name="userfile" accept="application/pdf" class="form-control" required>
          </div>
          <div>
            <input type="submit" id="btn" class="btn btn-default" name="Upload" value="Upload">
          </div>
        </form>
       <br>
      </div>
  </div>
<br>
</body>
</html>