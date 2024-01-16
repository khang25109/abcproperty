<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','root','','abcdb') or die('Unable To connect');

$sql = "SELECT * FROM customer WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'";
$result = mysqli_query($con, $sql) or die( mysqli_error($con));
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['customerID'];
$_SESSION["name"] = $row['customerName'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:users.php");
}
?>
