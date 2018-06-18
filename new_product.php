<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'dbconn.php'; ?>
add new product
<?php include '_header.php'; ?>


    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 border">
          <?php include '_nav.php'; ?>
        </div>
        <div class="col-md-8 border">

        <?php include 'add_new_product.php' ?>

        </div>
        <div class="col-md-2 border">

<?php include 'product_right_nav.php'; ?>

        </div>

      </div>
      <div class="row">
        <div class="col-md-12">

          <?php include '_footer.php' ?>
        </div>

      </div>
    </div>
