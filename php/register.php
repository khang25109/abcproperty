<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insert Customer Records</title>
</head>

<body>
<?php
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="abcdb"; // Database name 
$tbl_name="customer"; // Table name 

// Connect to server and select database.
//$conn = mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 
//mysqli_select_db($conn, "$db_name")or die("cannot select DB");

//start new
// Create connection
$conn = new mysqli($host, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//end new

// Get values from form 
$cname=$_POST['cname'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name (customerName, address, mobile, email, password) 
VALUES ('$cname', '$address', '$mobile', '$email', '$password')";
//$result=mysqli_query($conn, $sql);

// if successfully insert data into database, displays message "Successful". 
//if($result){
//echo "Successful";
//echo "<BR>";
//echo "<a href='../home.php'>Back to main page</a>";
//}

//else {
//echo "ERROR";
//}

//start new
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo "<BR>";
echo "<a href='../home.php'>Back to main page</a>"
//end new
?>
</body>
</html>