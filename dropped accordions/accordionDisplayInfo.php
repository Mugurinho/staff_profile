<?php
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
<div class="container" id = "network">
    <div class="col-md-6 form-group">
      <h3>User info</h3>
     	  <form role="form" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     		   <div class="form-group">
     			    <!--displays results based on hidden input that holds the username from session-->
              <input type = "hidden" id="un" name="txtuser" class="form-control" value=<?php echo $_SESSION ['Username'];?>>
                <?php include 'displayInfoScript.php';?>
          </div>
      </form>
    </div>
</div>
<div class="container" id = "notes">
    <div class="col-md-6 form-group">
      <?php include 'updateBioScript.php';?>
      <div class="form-group">
                <h3>Personal bio</h3>
                  <textarea readonly rows="9" id="tbbio" cols="80" maxlength="1500" name="txtbio" class="form-control"><?php echo $bio;?></textarea>
              <input type = "hidden" id="un" name="txtuser" class="form-control" value=<?php echo $_SESSION ['Username'];?>>  
          </div>
    </div>
</div>
<script src="accordionScript.js"></script>