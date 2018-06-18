
<?php
$servername = "X";
$username = "X";
$password = "X";
$dbname = "X";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed to the database: " . $conn->connect_error);

}
