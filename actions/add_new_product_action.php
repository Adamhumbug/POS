<?php

if (!isset($_SESSION)) {
  session_start();
}

include '../includes/dbconn.php';

if (isset($_REQUEST['new_product_submit'])) {

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_catagory = $_POST['product_catagory'];
$product_qty = $_POST['product_qty'];

if ($product_name ==""){
  echo "Product name must be filled";
  exit();
}

  $sql = "INSERT INTO pos_pr (product_name, product_price, product_catagory, product_qty) VALUES ('$product_name', '$product_price', '$product_catagory', '$product_qty')";

  if(mysqli_query($conn, $sql)){
    echo "Records added";
  }else{
    echo "Something went wrong adding the product";
  }
  mysqli_close($conn);
    }
 ?>
