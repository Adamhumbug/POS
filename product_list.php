<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'dbconn.php'; ?>
products page
<?php include '_header.php'; ?>


    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 border">
          <?php include '_nav.php'; ?>
        </div>
        <div class="col-md-7 border">

<!--New procuct stuff goes here-->
<?php


$sql = "SELECT * FROM products";

if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) > 0){
    echo "<table id='all_products_table' class='table table-hover'><tr>";
    echo "<th onclick='sortTable(0)'>Product ID</th>";
    echo "<th onclick='sortTable(1)'>Product Name</th>";
    echo "<th onclick='sortTable(2)'>Product Price</th>";
    echo "<th onclick='sortTable(3)'>Product Catagory</th>";
    echo "</tr>";
    while($row = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row['product_id'] . "</td>";
      echo "<td>" . $row['product_name'] . "</td>";
      echo "<td>" . $row['product_price'] . "</td>";
      echo "<td>" . $row['product_catagory'] . "</td>";
      echo "</tr>";

    }
    echo "</table>";
    mysqli_free_result($result);
  }else{
    echo "<p class='all_products_error'>There are no poducts to show</p>";
  }

}


 ?>
 <script>
 function sortTable(n) {
   var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
   table = document.getElementById("all_products_table");
   switching = true;
   //Set the sorting direction to ascending:
   dir = "asc";
   /*Make a loop that will continue until
   no switching has been done:*/
   while (switching) {
     //start by saying: no switching is done:
     switching = false;
     rows = table.getElementsByTagName("TR");
     /*Loop through all table rows (except the
     first, which contains table headers):*/
     for (i = 1; i < (rows.length - 1); i++) {
       //start by saying there should be no switching:
       shouldSwitch = false;
       /*Get the two elements you want to compare,
       one from current row and one from the next:*/
       x = rows[i].getElementsByTagName("TD")[n];
       y = rows[i + 1].getElementsByTagName("TD")[n];
       /*check if the two rows should switch place,
       based on the direction, asc or desc:*/
       if (dir == "asc") {
         if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
           //if so, mark as a switch and break the loop:
           shouldSwitch= true;
           break;
         }
       } else if (dir == "desc") {
         if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
           //if so, mark as a switch and break the loop:
           shouldSwitch = true;
           break;
         }
       }
     }
     if (shouldSwitch) {
       /*If a switch has been marked, make the switch
       and mark that a switch has been done:*/
       rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
       switching = true;
       //Each time a switch is done, increase this count by 1:
       switchcount ++;
     } else {
       /*If no switching has been done AND the direction is "asc",
       set the direction to "desc" and run the while loop again.*/
       if (switchcount == 0 && dir == "asc") {
         dir = "desc";
         switching = true;
       }
     }
   }
 }
 </script>

        </div>
        <div class="col-md-3 border">
<!--This can probably go-->
              <?php include 'order_summary.php' ?>

        </div>

      </div>
      <div class="row">
        <div class="col-md-12">

          <?php include '_footer.php' ?>
        </div>

      </div>
    </div>
