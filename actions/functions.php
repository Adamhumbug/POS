<?php



//this shows the product buttons on the main section of the page
//this needs the database connection and the variable needed in SQL
function getProductMainButtons($conn, $product_cat){
  

  $sql = "SELECT * FROM pos_pr WHERE product_catagory = '$product_cat' order by product_name asc";

  if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      echo "<form method='post' action='actions/add_to_basket_action.php' id='add_product_to_basket_form'>";
      while($row = mysqli_fetch_array($result)){
        echo "<button name='productSubmitButton' id='productID".$row['product_id']."' class='main-product-button col-md-2 btn btn-primary btn-lg space' value='". $row['product_id'] ."'>". $row['product_name'] . "<br/> £" . $row['product_price'] ."</button>";
      }
      
      mysqli_free_result($result);
    }

  }

}
//end of function


