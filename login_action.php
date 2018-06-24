<?php

session_start();
if(!isset($_SESSION['usr_name']) || empty($_SESSION['usr_name'])){
  header("location:index.php");
  }else{
  header("location:home.php");
}
?>

<?php
// session_start();
//
// if(isset($_SESSION['usr_name'])){
//   header("location:'home.php'");
// }
// require 'dbconn.php';
//
// $message = "";
// if (!empty($_POST["submit_form_button"])){
//   $result = mysqli_query($conn, "SELECT * FROM pos_usr WHERE usr_pass = $_POST[form_password]");
//   $row = mysqli_fetch_array($result);
//   if(is_array($row)){
//     $_SESSION["usr_name"] = $row['usr_name'];
//     header("location:home.php");
//     echo "this header does not work";
//     echo $_SESSION['usr_name'];
//   }else{
//     $message = "No user found";
//     echo "$message";
//   }
// }else{
//   echo "i dont do anything";
// }?>
