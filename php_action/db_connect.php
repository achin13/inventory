<?php 	

$localhost = "store.cseraeacxjps.ap-south-1.rds.amazonaws.com";
$username = "admin";
$password = "store123";
$dbname = "store";
$store_url = "/";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>
