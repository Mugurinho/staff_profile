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