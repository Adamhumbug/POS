<form>
	<div onclick='clearOrphanDbFRows($conn)' class='col-md-5 btn btn-lg btn-warning space'>Clear Orphan DB Rows</div>
</form>


<?php 


// $sql = "SELECT line_number,logon_time,product_id,transaction_product_qty,transaction_status, MIN(transaction_id) as transaction_id
// FROM transaction_log
// GROUP BY transaction_id
// HAVING COUNT(*) = 1";

// if($result = mysqli_query($conn, $sql)){
//   $row = mysqli_fetch_array($result);
//   	while($row = mysqli_fetch_array($result)){
//   		echo "this";
// }}else{
// 	echo "that";
// }


 ?>


