<?php
session_start();

include '../includes/dbconn.php';

$newtransid = $_SESSION['transaction_id'];	

$sql = "SELECT * FROM transaction_log WHERE transaction_id = $newtransid";
$result = $conn->query($sql);
$value = mysqli_num_rows($result);


if($value==1){
	$sql = "DELETE FROM transaction_log WHERE transaction_id = $newtransid";
	$conn->query($sql);
	session_destroy();
	header("Location: ../index.php");
}