<?php
Session_start();
if(isset($_SESSION['usr_name'])){
echo "User = ". $_SESSION['usr_name'] . "<br/>";
}else{
  header("Location:index.php");

}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include 'dbconn.php'; ?>
<?php include '_header.php'; ?>


    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 border">
          <?php include 'actions/show_product_catagory_sidebar_buttons_action.php'; ?>
          <a class="col-md-12 btn btn-danger tb-space" href="product_list.php">Products</a>
        </div>
        <div class="col-md-8 border">

<!--New product stuff goes here-->
<?php


$sql = "SELECT * FROM pos_pr";

if($result = mysqli_query($conn, $sql)){
  if(mysqli_num_rows($result) > 0){
    echo "<input id='all_products_search_bar' type='text' id='myInput' onkeyup='searchProductTable()' placeholder='Search for product name..'>";
    echo "<table id='all_products_table' class='table table-hover'><tr>";
    echo "<th onclick='sortTable(0)'>Product ID</th>";
    echo "<th onclick='sortTable(1)'>Product Name</th>";
    echo "<th onclick='sortTable(2)'>Product Price</th>";
    echo "<th onclick='sortTable(3)'>Product Catagory</th>";
    echo "<th onclick='sortTable(4)'>Product Qty</th>";
    echo "<th>Actions</th>";
    echo "</tr>";

    while($row = mysqli_fetch_array($result)){
      echo "<tr>";
      echo "<td>" . $row['product_id'] . "</td>";
      echo "<td>" . $row['product_name'] . "</td>";
      echo "<td>" . $row['product_price'] . "</td>";
      echo "<td>" . $row['product_catagory'] . "</td>";
      echo "<td>" . $row['product_qty'] . "</td>";
      echo "<td><a href='action/action.php?DeleteProductID=" . $row['product_id'] . "'>Delete</a></td>";
      echo "</tr>";

    }
    echo "</table>";
    echo "<button class='btn btn-secondary' onclick='editable()'>Make Table Editable</button>";
    mysqli_free_result($result);
  }else{
    echo "<p class='all_products_error'>There are no poducts to show</p>";
  }

}


 ?>
 <script>
 function editable() {
    document.getElementById("all_products_table").contentEditable = true;
}
</script>
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

 <script>
function searchProductTable() {
  // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("all_products_search_bar");
  filter = input.value.toUpperCase();
  table = document.getElementById("all_products_table");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

        </div>
        <div class="col-md-2 border">

              <?php include 'product_right_nav.php'; ?>

        </div>

      </div>
      <div class="row">
        <div class="col-md-12">

          <?php include '_footer.php' ?>
        </div>

      </div>
    </div>
