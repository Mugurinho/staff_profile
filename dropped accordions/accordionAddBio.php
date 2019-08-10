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
<div class="container" id = "notes">
    <div class="col-md-6 form-group">
      <h3>Add personal bio</h3>
         <form role="form" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
           <?php include 'displayBioScript.php';?>
          <div class="form-group">
              <input type="hidden"  name="un" class="form-control" disabled value=<?php echo $_SESSION ['Username'];?>>
          </div>
          <div class="form-group">
              <textarea rows="9" cols="80" maxlength="1500" id="tbbio" name="txtbio" class="form-control" data-toggle="tooltip" data-placement="top" title="Write a max of 1500 letters bio" placeholder="Write bio here..." required><?php echo $bio;?></textarea>
          </div>
          <div class="form-group">
            <select class="form-control" id="sel1" name="Select" required>
              <option value="public">Set as public bio</option>
              <option value="private">Set as private bio</option>
            </select>
          </div>
          <div>
            <input type="submit" id="btn" class="btn btn-default" name="AddBio" value="Add bio">
          </div>
        </form>
       <br>
      </div>
  </div>
<br>