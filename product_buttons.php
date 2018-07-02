<?php

$product_cat = urldecode($_GET['product_catagory']);

$sql = "SELECT * FROM pos_pr WHERE product_catagory = '$product_cat' order by product_name asc";

if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) > 0){
    echo "<form id='add_product_to_basket_form' onclick='addProductItemToBasket(this.value)'>";
    while($row = mysqli_fetch_array($result)){
      echo "<div id='".$row['product_id']."' class='col-md-2 btn btn-primary btn-lg space' value='". $row['product_id'] ."' type='add_product_to_order_submit'>". $row['product_name'] . "<br/> £" . $row['product_price'] ."</div>";
    }
    echo "<br>
            <input id='basket_product_id' type='text'>
            <input id='basket_product_qty' type='text'>
            <input id='basket_transaction_id' type='text'>
          </form>";
    echo "</form>";
    mysqli_free_result($result);
  }else{
    echo "<p id='noProductsToShow'>Pick a product catagory</p>";
  }

}


 ?>

<script type="text/javascript">
function product_into_form( value )
{
  document.getElementById('id')
var previousVal = document.getElementById("form_password").value;
previousVal = previousVal + number.value;
document.getElementById("form_password").value = previousVal;
 }
</script>
