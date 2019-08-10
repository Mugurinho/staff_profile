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