<?php

$product_cat = urldecode($_GET['product_catagory']);

$sql = "SELECT * FROM products WHERE product_catagory = '$product_cat'";

if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) > 0){
    echo "<form name='product_item' onclick='addProductItemToCurrentOrder(this.value)'>";
    while($row = mysqli_fetch_array($result)){
      echo "<div class='col-md-3 btn btn-primary btn-lg space' value='". $row['product_id'] ."' type='add_product_to_order_submit'>". $row['product_name'] . "<br/> £" . $row['product_price'] ."</div>";
    }
    echo "</form>";
    mysqli_free_result($result);
  }else{
    echo "<p id='noProductsToShow'>There are no poducts catagories to show</p>";
  }

}


 ?>
