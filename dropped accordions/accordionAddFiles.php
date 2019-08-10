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