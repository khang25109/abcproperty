<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Log in</title>
<link rel="stylesheet" href="css/logination.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include("header.php");
include ("php/connect-db.php");
$connection = db_connect();

if ($connection->connect_errno > 0) {
	die ('Unable to connect to database [' . $connection->connect_error . ']');
}	
$sql = "select * from property";
$result = $connection->query($sql);
?>
 <div class="rightcolumn">
    <div class="card">
      <h2>Customer Login</h2>
      <form action="php/login.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>
</div>
<div class="footer">
  <p class="footerP">Minh Khang Nguyen &copy; 2024</p>
</div>
</body>

</html>