<!DOCTYPE html>
<html lang="en">
<head id = "newbody" onload="myFunction()">
  <title>Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php include 'navMenu.php';?>
<div class="container" id = "login">
    <div class="col-md-6 form-group">
      <h3>Login form</h3>
       <form role="form" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <?php include 'loginScript.php';?>
          <div class="form-group">
            <label>Username:</label>
              <input type="text" id="tbusername" name="txtuser" class="form-control" placeholder="Username*" required>
          </div>
          <div class="form-group">
            <label>Password:</label>
              <input type="password" id="tbpassword" name="txtpass" class="form-control" placeholder="Password*" required>
          </div>
          <div>
              <input type="submit" class="btn btn-default" name="Login" id="btn" value="Login">
          </div>
        </form><br>
      </div>
</div>
<script src="accordionScript.js"></script>
</body>
</html>