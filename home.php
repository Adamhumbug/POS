<?php if (!isset($_SESSION)) {
  session_start();
}
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<script>
$( document ).ready(function(add_to_translog) {
    // Variable to hold request
var request;

// Bind to the submit event of our form
$(".main-product-button").submit(function(event){

    // Prevent default posting of form - put here to work in case of errors
    event.preventDefault();

    // Abort any pending request
    if (request) {
        request.abort();
    }
    // setup some local variables
    var $form = $(this);

    // Let's select and cache all the fields
    var $inputs = $form.find("button, value");

    // Let's disable the inputs for the duration of the Ajax request.
    // Note: we disable elements AFTER the form data has been serialized.
    // Disabled form elements will not be serialized.
    $inputs.prop("disabled", true);

    // Fire off the request to /form.php
    request = $.ajax({
        url: "actions/add_to_basket_action.php",
        type: "post",
        data: { action: this.value },
    });

    // Callback handler that will be called on success
    request.done(function (response, textStatus, jqXHR){
        // Log a message to the console
        console.log("Hooray, it worked!");
    });

    // Callback handler that will be called on failure
    request.fail(function (jqXHR, textStatus, errorThrown){
        // Log the error to the console
        console.error(
            "The following error occurred: "+
            textStatus, errorThrown
        );
    });

    // Callback handler that will be called regardless
    // if the request failed or succeeded
    request.always(function () {
        // Reenable the inputs
        $inputs.prop("disabled", false);
    });

});
});
</script>

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
        <?php include 'includes/order_summary.php'; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <?php include 'includes/_footer.php'; ?>
      </div>
    </div>
  </div>
  