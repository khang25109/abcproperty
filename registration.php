<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Register</title>

<link rel="stylesheet" href="css/registration.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


    <div class="card">
      <h2>Customer Registration</h2>
       <form action="register.php" method="post">
      <div class="form-group">
                <label>Customer Name</label>
                <input type="text" name="cname" class="form-control">
      </div>
				<div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control">
            </div>
				<div class="form-group">
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control">
            </div>

				<div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Register">
            </div>
        </form>
    </div>
    <div class="footer">
  <p class="footerP">Minh Khang Nguyen &copy; 2024</p>
</div>
</body>
</html>