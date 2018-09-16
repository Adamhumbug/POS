<?php
include '../includes/dbconn.php';

//have a look at the database, may need to rethink this completely

if (isset($_REQUEST['main-product-button'])) {

$basket_product_id = $_POST['action'];



  $sql = "INSERT INTO transaction_log (product_id) VALUES ('$basket_product_id')";

  if(mysqli_query($conn, $sql)){
    echo "Records added";
  }else{
    echo "Something went wrong adding the product";
  }
  mysqli_close($conn);
    }


 ?>
