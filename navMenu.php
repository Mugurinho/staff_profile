<!--navigation menu-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php" id = "portalnav">Staff profile PHP Portal</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li id = "navig"><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
        <li id = "navig"><a href="searchInfo.php"><span class="glyphicon glyphicon-search"></span>&nbsp;Search</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" id = "navig" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span>&nbsp;Account<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="manageAccount.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Manage account</a></li>
            <li><a href="displayInfo.php"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;User info</a></li>
            <li><a href="updateInfo.php"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Update info</a></li>
            <li><a href="addBio.php"><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;Add bio</a></li>
            <li><a href="updateBio.php"><span class="glyphicon glyphicon-edit"></span>&nbsp;Update bio</a></li>
            <li><a href="addFiles.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp;Add files</a></li>
            <li><a href="displayFiles.php"><span class="glyphicon glyphicon-file"></span>&nbsp;Display files</a></li>
             <li><a href="json_file.php"><span class="glyphicon glyphicon-file"></span>&nbsp;Json data</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" id = "navig" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th-list"></span>&nbsp;Notes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="addNotes.php"><span class="glyphicon glyphicon-pencil"></span>&nbsp;Add notes</a></li>
            <li><a href="manageNotes.php"><span class="glyphicon glyphicon-erase"></span>&nbsp;Manage notes</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li id = "navig"><a href="login.php"><span class="glyphicon glyphicon-lock"></span>&nbsp;Login</a></li>
        <li id = "navig"><a href="join.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Join us</a></li>
      </ul>
    </div>
  </div>
</nav>