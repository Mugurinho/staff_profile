<?php session_start();
if(isset($_SESSION['Username'])){
    $username = $_SESSION['Username'];
    $userID = $_SESSION['UserID'];
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
  <link rel="stylesheet" type="text/css" href="loginJoin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php include 'navMenu.php';?>
  <p id = "userlogin">Welcome, &nbsp;<?php echo $_SESSION ['Username'];?>&nbsp;<a id = "userlogout" href="logout.php">Logout</a></p>
<div class="container" id = "note">
    <div class="col-md-6 form-group">
      <h3>Add a new note</h3>
        <form role="form" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <?php include 'addNotesScript.php';?>
            <div class="form-group">
                  <label>Subject:</label>
                    <input type="text" id="tbsubject" name="txtsubject" maxlength="15" class="form-control" data-toggle="tooltip" data-placement="top" title="Add a max of 15 letters subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
                  <label>Notes:</label>
                    <textarea rows="4" cols="70" maxlength="200" id="tbnote" name="txtnote" class="form-control" data-toggle="tooltip" data-placement="top" title="Write a max of 200 letters note" placeholder="Write note here..." required></textarea>
            </div>
            <div>
              <input type="submit" class="btn btn-default" name="Note" id="btn" value="Note">
            </div>
        <br>
      </form>
    </div>
  </div>
<div class="container" id = "notes">
   <div class="col-md-12 form-group">
     <form role="form" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <h3>Most recent 5 notes</h3><br> 
        <div class="table-responsive"> 
            <table class="table">
                <tr id="column_name">
                  <th>Username</th>
                  <th>Subject</th>
                  <th>Note</th>
                  <th>Date</th>
               </tr>
              <?php include 'displayNotesScript.php';?>
           
            </table>
        </div>
      </form>
    </div>
</div>
</br>
</body>
</html>