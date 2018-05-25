<?php

$trans_id = '300';

$sql = "SELECT current_sale.sale_id, products.product_name, products.product_price
FROM current_sale
INNER JOIN products
ON current_sale.product_id=products.product_id
where sale_id ='$trans_id'";

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
      echo "<tr><td>" . $row['product_name'] ."</td><td>". $row['product_price'] . "</td><td>" . $row['quantity'] . "</td></tr>";
    }
echo "</tbody>
</table>";
    mysqli_free_result($result);
  }else{
    echo "There is nothing to show in this summary";
  }

}


 ?>
