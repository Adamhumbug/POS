<?php

$trans_id = '3';

$sql = "SELECT pos_basket.sale_line_id, pos_pr.product_name, pos_pr.product_price, pos_pr.product_qty
FROM pos_basket
INNER JOIN pos_pr
ON pos_basket.product_id=pos_pr.product_id
where transaction_id ='$trans_id'";

if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) > 0){

echo "<table class='table table-striped'>
<thead class='thead'>
<tr>
<th>Product Name</th>
<th>Price</th>
<th>Qty</th>
</tr>
</thead>
<tbody>";
    while($row = mysqli_fetch_array($result)){
      echo "<tr><td>" . $row['product_name'] ."</td><td>". $row['product_price'] . "</td><td>" . $row['product_qty'] . "</td></tr>";
    }
echo "</tbody></table>";
    mysqli_free_result($result);
  }else{
    echo "There is nothing to show in this summary";
  }

}


 ?>
