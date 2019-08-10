<?php include 'welcome.php';?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.alert {
    padding: 20px;
    background-color: black;
    color: white;
}
.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.6s;
}
.closebtn:hover {
    color: black;
}
</style>
<br>
<!--Container (Features Section)-->
  <div class="container" id = "note">
  <!--ex-accordion feature/page converted for text, time and battery display, includes the js script files to timer and battery-->
    <div class="time">
        <h1>MORE FEATURES COMING SOON...</h1>
        <hr>
        <p id="demo"></p>
        <div id="div1" class="fa"></div>
    </div>

<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong><?php echo $welcome?></strong>
</div>


        <div class="col-md-12 form-group">
          <h2>PORTAL FEATURES&nbsp;<span class="glyphicon glyphicon-ok"></span></h2>
                <div id="col" class="col-sm-4">
                  <a href="join.php"><span id="glyph" class="glyphicon glyphicon-user"></span></a>
                      <h4>User sign up</h4>
                      <p>The user can open an account by signing up</p>
                </div>
                <div id="col" class="col-sm-4">
                  <a href="login.php"><span id="glyph" class="glyphicon glyphicon-log-in"></span></a>
                      <h4>User log in/log out</h4>
                      <p>The user must log in to use the website's features</p>
                </div>
                <div id="col" class="col-sm-4">
                  <a href="updateInfo.php"><span id="glyph" class="glyphicon glyphicon-pencil"></span></a>
                      <h4>Info update</h4>
                      <p>The user can update his details</p>
                </div>
                <div id="col" class="col-sm-4">
                 <a href="addNotes.php"><span id="glyph" class="glyphicon glyphicon-pencil"></span></a>
                      <h4>Write notes</h4>
                      <p>The user can write notes</p>
                </div>
                <div id="col" class="col-sm-4">
                  <a href="manageNotes.php"><span id="glyph" class="glyphicon glyphicon-erase"></span></a>
                      <h4>Manage notes</h4>
                      <p>The user can remove notes</p>
                </div>
                <div id="col" class="col-sm-4">
                  <a href="updateInfo.php"><span id="glyph" class="glyphicon glyphicon-camera"></span></a>
                      <h4>Profile picture</h4>
                      <p>The user can have a profile picture</p>
                </div>
                <div id="col" class="col-sm-4">
                  <a href="searchInfo.php"><span id="glyph" class="glyphicon glyphicon-search"></span></a>
                      <h4>Ajax search engine</h4>
                      <p>Any user can search other users</p>
                </div>
                <div id="col" class="col-sm-4">
                  <a href="manageAccount.php"><span id="glyph" class="glyphicon glyphicon-globe"></span></a>
                      <h4>Manage account</h4>
                      <p>The user can manage his account</p>
                </div>
                <div id="col" class="col-sm-4">
                  <a href="addBio.php"><span id="glyph" class="glyphicon glyphicon-th-list"></span></a>
                      <h4>Add personal bio</h4>
                      <p>The user can add or update personal bio</p>
                </div>
        </div>
  </div>
<!--<script src="timer.js"></script>-->
<script src="battery.js"></script>