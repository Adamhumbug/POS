<?php

//
//this shows the product buttons on the main section of the page
//this needs the database connection and the variable needed in SQL
function getProductMainButtons($conn, $product_cat){
  $sql = "SELECT * FROM pos_pr WHERE product_catagory = '$product_cat' order by product_name asc";

  if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
      echo "<form id='add_product_to_basket_form'>";
      while($row = mysqli_fetch_array($result)){
        echo "<div id='productID".$row['product_id']."' class='col-md-2 btn btn-primary btn-lg space' value='". $row['product_id'] ."'>". $row['product_name'] . "<br/> £" . $row['product_price'] ."</div>";
      }
      echo "<br>
              <input id='basket_product_id' type='text'>
              <input id='basket_product_qty' type='text'>
              <input id='basket_transaction_id' type='text'>
            </form>";
      mysqli_free_result($result);
    }

  }

}
//end of function


function showSideBarProductButtons($conn){
  $sql = "SELECT DISTINCT product_catagory FROM pos_pr GROUP BY product_catagory ORDER BY product_catagory ASC";

  if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
  $firstarray = array();

      while($row = mysqli_fetch_array($result)){
        echo "<a href=home.php?product_catagory=" . urlencode($row['product_catagory']) ."><div class='col-md-12 btn btn-primary tb-space'>" . $row['product_catagory'] . "</div></a>";

      //below - $prods becomes every product one at a time as it is in while
        $prods =$row['product_catagory'];
      //below - adds value of $prods to array called $firstarray one at a time until end
        array_push($firstarray,$prods);


      }
      mysqli_free_result($result);

    }else{
      echo "This did not work!";
    }
    //below - spits out first value of array
  $setFirstArray=$firstarray[0];
  }
}
