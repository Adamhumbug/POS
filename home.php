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
Home Page
<?php include '_header.php'; ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 border">
          <?php include '_nav.php'; ?>
        </div>
        <div class="col-md-7 border">
          <?php include '_maincontent.php'; ?>
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
