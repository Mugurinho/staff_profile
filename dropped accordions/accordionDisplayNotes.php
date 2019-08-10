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
<script src="accordionScript.js"></script>