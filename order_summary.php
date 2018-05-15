<?php

$product_cat = urldecode($_GET['product_catagory']);

$sql = "SELECT * FROM products WHERE product_catagory = '$product_cat'";

if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      echo "<ul class='list-group list-group-flush'><li class='list-group-item'>" . $row['product_name'] ."</li></ul>";
    }
    mysqli_free_result($result);
  }else{
    echo "This did not work";
  }

}


 ?>
