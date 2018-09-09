<?php
include '../dbconn.php';

if (isset($_REQUEST['add_to_basket_submit'])) {

$basket_product_id = $_POST['basket_product_id'];



  $sql = "INSERT INTO pos_basket (product_id) VALUES ('$basket_product_id')";

  if(mysqli_query($conn, $sql)){
    echo "Records added";
    header("Location:home.php");
  }else{
    echo "Something went wrong adding the product";
  }
  mysqli_close($conn);
    }


 ?>
