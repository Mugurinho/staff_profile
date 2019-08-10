<?php session_start();
if(isset($_SESSION['Username'])){
    $username = $_SESSION['Username'];
}//if no existing session, user logged out
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.card {
  background-color: black;
  opacity: 0.9;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.social{
  font-size: 25px;
  margin: 24px 0;
}
.fa{
  margin-left: 40px;
  text-align: center;
}
h4, h3 {
  color: gray;
}
h4{
  text-align: center;
}
.btn{
  color: black;
  margin: 10px;
}
</style>
</head>

<body>
<?php include 'navMenu.php';?>
<p id = "userlogin">Welcome, &nbsp;<?php echo $_SESSION ['Username'];?>&nbsp;<a id = "userlogout" href="logout.php">Logout</a></p>
<div class="card">
  <br>
  <h3><?php echo $_SESSION ['Username'];?></h3>
  <h4><?php include 'displayInfoScript.php';?></h4>     
    <div class="social">
      <a href="#"><i class="fa fa-twitter"></i></a>  
      <a href="#"><i class="fa fa-linkedin"></i></a>  
      <a href="#"><i class="fa fa-facebook"></i></a> 
   </div>
    <div>
       <form role="form" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <?php include 'deleteAccount.php';?>
          <a href="displayInfo.php" class="btn btn-info" role="button" data-toggle="tooltip" data-placement="top" title="See your info">Display info</a>
          <a href="updateInfo.php" class="btn btn-info" role="button" data-toggle="tooltip" data-placement="top" title="Update your info">Update info</a>
          <input type="submit" class="btn btn-danger" name="Delete" onClick="return checkMe()" value="Delete account" data-toggle="tooltip" data-placement="top" title="Your account will be deleted!">
      </form>
    </div>
  </div>
<br>
<br>
<!--tooltip js script-->
  <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
  </script>
<!--confirm user wants to delete account js script-->
  <script>
    function checkMe() {
      if (confirm("Are you sure you want to delete your account?")) {
          return true;
      } 
      else {
          alert("Phew, your account has not been deleted.");
          return false;
      }
    }
  </script>
</body>
</html>