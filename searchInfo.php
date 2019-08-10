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
<div class="container" id = "join">
   <br />
   <h2>Ajax Live Data Search using Jquery PHP MySql</h2><br />
     <div class="form-group">
      <div>
        <input type="text" name="search_text" class="form-control" id="search_text" placeholder = "Search user"/>
      </div>  
     </div>
     <br />
   <div id="result"></div>
</div>

<!--http://www.webslesson.info/2016/03/ajax-live-data-search-using-jquery-php-mysql.html OR https://www.youtube.com/watch?v=wCsPAquMNVw-->
<script>
$(document).ready(function(){
 load_data();
 function load_data(query){
  $.ajax({
   url:"searchScript.php",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != ''){
   load_data(search);
  }
  else{
   load_data();
  }
 });
});
</script>
</body>
</html>