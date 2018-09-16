<?php

$trans_id = '3';

$sql = "SELECT transaction_log.line_number, pos_pr.product_name, pos_pr.product_price, transaction_log.transaction_product_qty
FROM transaction_log
INNER JOIN pos_pr
ON transaction_log.product_id = pos_pr.product_id
where transaction_id ='$trans_id' ";



if($result = mysqli_query($conn, $sql)){


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
      echo "<tr><td>" . $row['product_name'] ."</td><td>". $row['product_price'] . "</td><td>" . $row['transaction_product_qty'] . "</td></tr>";
    }
echo "</tbody></table>";
    mysqli_free_result($result);

}else{
	echo "connection error";
}


 ?>
<div class="btn btn-lg btn-primary attach-bottom">Tender</div>