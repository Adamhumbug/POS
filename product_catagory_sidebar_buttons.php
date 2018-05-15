<?php

$sql = "SELECT DISTINCT (product_catagory) FROM products";

if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
      echo "<a href=home.php?product_catagory=" .urlencode($row['product_catagory']) ."><div class='col-md-12 btn btn-primary'>" . $row['product_catagory'] . "</div></a><br/><br/>";
    }
    mysqli_free_result($result);
  }else{
    echo "This did not work";
  }

}

 ?>
