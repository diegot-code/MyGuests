<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Guests</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="shortcut icon" type="image/x-icon" href="img/guest.ico">
<style>
  table {
    display: block;
    overflow-x: auto;
  }
</style>
</head>
<body>
	
<?php
include 'nav.html';
?>

<div class="container">
  <div class="row">
    
    <div class="col-md-12">

      <div class="page-header">
        <h1>My Guests</h1>
      </div>

      <?php
        include 'form.php';
      
        include 'table.php';
      ?>

    </div>
    
  </div>
</div>


</body>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>