<?php
$db_servername = "";
$db_username = "";
$db_password = "";
$db_name = "";

// Create connection
// $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
function connectDB($db_servername, $db_username, $db_password, $db_name){
  return new mysqli($db_servername, $db_username, $db_password, $db_name);
}

global $conn;
$conn = connectDB($db_servername, $db_username, $db_password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection to database failed: " . $conn->connect_error);

}else{
  // echo "<div class='alert alert-success'>DB Connected</div>";
}
