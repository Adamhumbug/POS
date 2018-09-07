<?php
Session_start();
if(isset($_SESSION['usr_name'])){
echo "User = ". $_SESSION['usr_name'] . "<br/>";
}else{
  header("Location:index.php");

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'dbconn.php'; ?>
<?php include '_header.php'; ?>


    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 border">
          <?php include 'actions/show_product_catagory_sidebar_buttons_action.php'; ?>
          <a class="col-md-12 btn btn-danger tb-space" href="product_list.php">Products</a>
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
