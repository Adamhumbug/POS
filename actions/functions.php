<?php



//this shows the product buttons on the main section of the page
//this needs the database connection and the variable needed in SQL
function getProductMainButtons($conn, $product_cat){
  

  $sql = "SELECT * FROM pos_pr WHERE product_catagory = '$product_cat' order by product_name asc";

  if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      echo "<form method='post' action='actions/add_to_basket_action.php' id='add_product_to_basket_form'>";
      while($row = mysqli_fetch_array($result)){
        echo "<button onclick='add_to_translog' name='product" .$row['product_id']. "' id='productID".$row['product_id']."' class='main-product-button col-md-2 btn btn-primary btn-lg space' value='". $row['product_id'] ."'>". $row['product_name'] . "<br/> £" . $row['product_price'] ."</button>";
      }
      echo "<br>
              <input name='basket_product_id' id='basket_product_id' type='text'>
              <input name='basket_product_qty' id='basket_product_qty' type='text'>
              <input name='basket_transaction_id' id='basket_transaction_id' type='text'>
              <input name='add_to_basket_submit' type='submit' value='add to basket'>
            </form>";
      mysqli_free_result($result);
    }

  }

}
//end of function

// function clearOrphanDbFRows($conn){
  //select all of the values that only appear once in the db
//   $sql = "SELECT transaction_id, MIN(transaction_id) as transaction_id
// FROM transaction_log
// GROUP BY transaction_id
// HAVING COUNT(*) = 1";

// if($result = mysqli_query($conn, $sql)){
//   $row = mysqli_fetch($result);
//   echo "this";
// }
// echo "that";
// }

   
