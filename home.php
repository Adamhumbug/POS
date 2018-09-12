<?php session_start();


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include 'dbconn.php'; ?>
  <?php include '_header.php'; ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 border">
        <?php include '_nav.php' ?>


      </div>
      <div class="col-md-7 border">
        <?php
        //this is looking to see if product exists in the url
        //if not $product_cat is set to be the first product
        //this comes from the functions document
        if (strpos($_SERVER['REQUEST_URI'], "product") == false){
        $product_cat = $firstproduct;
        }else{
        $product_cat = urldecode($_GET['product_catagory']);
        }
        //this is looking at functions.php and running the code from there
        getProductMainButtons($conn, $product_cat);
        ?>
      </div>
      <div class="col-md-3 border">
        <?php include 'order_summary.php'; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php include '_footer.php'; ?>
      </div>
    </div>
  </div>
  