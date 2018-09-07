<?php
$db_servername = "db742558316.db.1and1.com";
$db_username = "dbo742558316";
$db_password = "Aimington0!";
$db_name = "db742558316";

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
