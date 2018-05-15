<?php


$product_cat = urldecode($_GET['product_catagory']);

$sql = "SELECT * FROM products WHERE product_catagory = '$product_cat'";

if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      echo "<tr><td>". $row['product_name'] ."</td><td>". $row['product_price'] . "</td></tr>";
    }
    mysqli_free_result($result);
  }else{
    echo "This did not work";
  }

}


 ?>
