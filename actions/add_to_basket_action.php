<?php
include '../includes/dbconn.php';

echo "we got here";

//have a look at the database, may need to rethink this completely

$stmt = $conn->prepare("INSERT INTO transaction_log (product_id) VALUES (?)");
$stmt->bind_param("s", $basket_product_id);
//this is the name of the button
$basket_product_id = $_POST['productSubmitButton'];

$stmt->execute();

$stmt->close();
$conn->close();
?>