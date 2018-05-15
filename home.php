<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'dbconn.php'; ?>
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
          <?php include 'order_summary.php' ?>
        </div>

      </div>
      <div class="row">
        <div class="col-md-12">
          <?php include '_footer.php' ?>
        </div>

      </div>
    </div>
