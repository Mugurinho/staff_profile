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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<div class="container" id = "notes">
   <div class="col-md-12 form-group">
     <form role="form" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <h3>Most recent 10 files</h3><br> 
        <div class="table-responsive"> 
            <table class="table">
                <tr id="column_name">
                  <th>Name</th>
                  <th>Title</th>
                  <th>File</th>
                  <th>Download</th>
               </tr>
              <?php include 'displayFilesScript.php';?>
            </table>
        </div>
      </form>
    </div>
</div>
</body>
</html>