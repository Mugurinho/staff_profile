<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portal</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" type="text/css" href="loginJoin.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<?php include 'navMenu.php';?>
<div class="container" id = "join">
    <div class="col-md-6 form-group">
      <h3>Registration form</h3>
        <form role="form" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         <?php include 'joinScript.php';?>
          <div class="form-group">
                <label>Username:</label>
              <input type="text" id="tbusername" name="txtuser" class="form-control" placeholder="Username*" data-toggle="tooltip" data-placement="top" title="Username must not be blank and may contain letters, numbers and underscores" pattern="\w+" required>
              <div id="username_error" class="val_error"></div>
          </div>
          <div class="form-group">
                <label>Email:</label>
              <input type="email" id="tbemail" name="txtemail" class="form-control" placeholder="Email*" data-toggle="tooltip" data-placement="top" title="Email must be a valid email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required>
              <div id="email_error" class="val_error"></div>
          </div>
          <div class="form-group">
                <label>Password:</label>
              <input type="password" id="tbpassword" name="txtpass" class="form-control" data-toggle="tooltip" data-placement="top" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" placeholder="Password*" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>
              <div id="password_error" class="val_error"></div>
          </div>
          <div class="form-group">
                <label>Confirm Password:</label>
              <input type="password" id="tbconf" name="txtconf" class="form-control" data-toggle="tooltip" data-placement="top" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers." placeholder="Confirm Password*" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" required>
              <div id="password_error" class="val_error"></div>
          </div>
          <div class="form-group">
                <label>First name:</label>
              <input type="text" id="tbpassword" name="txtfn" class="form-control" placeholder="First name">
              <div id="password_error" class="val_error"></div>
          </div>
          <div class="form-group">
                <label>Last name:</label>
              <input type="text" id="tbpassword" name="txtln" class="form-control" placeholder="Last name">
              <div id="password_error" class="val_error"></div>
          </div>
          <div class="form-group">
                <label>Address:</label>
              <input type="address" id="tbpassword" name="txtaddress" class="form-control" placeholder="Address">
              <div id="password_error" class="val_error"></div>
          </div>
          <div class="form-group">
            <input type="checkbox" checked="checked"> Remember me
            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
          </div>
          <div>
            <input type="submit" class="btn btn-default" name="Join" id="btn" value="Register">
          </div>
        <br><p id="registration"></p>
      </form>
    </div>
  </div>
  <script src="passwordConfirmScript.js"></script>
  <script src="accordionScript.js"></script>
  <script>
  $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
  });
  </script>
</body>
</html>