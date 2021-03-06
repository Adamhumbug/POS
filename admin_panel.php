<?php if (!isset($_SESSION)) {
  session_start();
}  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include 'includes/dbconn.php'; ?>
  <?php include 'includes/_header.php'; ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 border height-100">
        <?php include 'includes/_nav.php' ?>


      </div>
      <div class="col-md-7 border">
        <div class="col-md-5 btn btn-lg btn-primary space">Recall Transaction</div>
        <div class="col-md-5 btn btn-lg btn-primary space">No Sale</div>
        <a class="col-md-5 btn btn-lg btn-primary space" href="product_list.php">Products</a>
        <?php 
          if ($_SESSION['usr_level']=='10'){
            include 'includes/db_admin.php';
          }
        ?>
        
      </div>
      <div class="col-md-3 border">
        <?php include 'includes/order_summary.php'; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php include 'includes/_footer.php'; ?>
      </div>
    </div>
  </div>
  