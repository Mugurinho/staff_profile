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