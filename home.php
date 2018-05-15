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
          <table class="table table-striped">
            <thead class="thead">
              <tr>
                <th>Product Name</th>
                <th>Price</th>
                <th>Qty</th>
              </tr>
            </thead>
            <tbody>
              <?php include 'order_summary.php' ?>
            </tbody>
          </table>
        </div>

      </div>
      <div class="row">
        <div class="col-md-12">
          <?php include '_footer.php' ?>
        </div>

      </div>
    </div>
