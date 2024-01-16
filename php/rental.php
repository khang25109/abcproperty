<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to our website</title>
<link rel="stylesheet" href="../css/styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include("../header.php");
include ("connect-db.php");
$connection = db_connect();

if ($connection->connect_errno > 0) {
	die ('Unable to connect to database [' . $connection->connect_error . ']');
}	
$sql = "select * from property where catID = 3";
$result = $connection->query($sql);
?>
<div class="row">
  <div class="leftcolumn">
    <div class="col-lg-12">

          <div class="row">

			<?php 
			while ($product = $result->fetch_array()) { ?>
				<div class="col-lg-4 col-md-6 mb-4">
				  <div class="card h-100">
					<img class="card-img-top" src="../<?php echo $product['images']; ?>">
					<div class="card-body">
					  <h4 class="card-title">
						<?php echo $product['Address']; ?>
						<?php echo $product['price']; ?>
					  </h4>
					  <p class="card-text">
					  <?php echo $product['description']; ?></p>
					</div>
				  </div>
				</div>
			<?php 
			}
			$result->free();
			?>
			
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
  </div>
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
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

    </div>
    <div class="card">
      <h3>Popular Post</h3>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
      <div class="fakeimg"><p>Image</p></div>
    </div>
    <div class="card">
      <h3>Follow Me</h3>
      <p>Some text..</p>
    </div>
  </div>
</div>
  <?php
  include("../footer.php");
  ?>
</body>
</html>