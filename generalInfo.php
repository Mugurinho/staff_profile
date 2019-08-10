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
</body>
</html>
<div class="container" id = "network">
    <div class="col-md-6 form-group">
        <form role="form" method='post' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
           <div class="form-group">
              <?php include 'generalInfoScript.php';?>
          </div>
      </form>
    </div>
</div>