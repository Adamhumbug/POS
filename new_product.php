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
          <?php include 'includes/_nav.php'; ?>

        </div>
        <div class="col-md-8 border">

        <?php include 'includes/add_new_product.php' ?>

        </div>
        <div class="col-md-2 border">

<?php include 'includes/product_right_nav.php'; ?>

        </div>

      </div>
      <div class="row">
        <div class="col-md-12">

          <?php include 'includes/_footer.php' ?>
        </div>

      </div>
    </div>
