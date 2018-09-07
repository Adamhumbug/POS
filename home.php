<?php session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'dbconn.php'; ?>
<?php include '_header.php'; ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 border">
          <?php showSideBarProductButtons($conn); ?>
          <a class="col-md-12 btn btn-danger tb-space" href="product_list.php">Products</a>
        </div>
        <div class="col-md-7 border">
          <?php

          if (strpos($_SERVER['REQUEST_URI'], "product") == false){
            $product_cat = $setFirstArray;
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

    <a class="btn btn-primary" href="actions/logoff_actions.php">LOG OFF</a>
