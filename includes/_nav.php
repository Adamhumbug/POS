<?php 

  $sql = "SELECT DISTINCT product_catagory FROM pos_pr GROUP BY product_catagory ORDER BY product_catagory ASC";

  if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
  $firstarray = array();

      while($row = mysqli_fetch_array($result)){
        echo "<a href=home.php?product_catagory=" . urlencode($row['product_catagory']) ."><div class='col-md-12 btn btn-lg btn-primary tb-space'>" . $row['product_catagory'] . "</div></a>";

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



  }

$firstproduct=$firstarray[0];

 ?>

 
	<a class="col-md-12 btn btn-lg btn-warning tb-space" href="product_list.php">Stock</a>
 <?php    
if($_SESSION['usr_level']=="1" || "10"){
	echo "<a href='admin_panel.php' class='col-md-12 btn btn-lg btn-primary tb-space'>Admin</a>";
}
?>

<a class="col-md-12 btn btn-lg btn-danger extra-top" href="actions/logoff_actions.php">LOG OFF</a>
