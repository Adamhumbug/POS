<?php
session_start();

if(isset($_SESSION['usr_name'])){
  header("location:home.php");
}
require 'dbconn.php';

$message = "";
if (!empty($_POST["submit_form_button"])){
  $result = mysqli_query($conn, "SELECT * FROM pos_usr WHERE usr_pass = $_POST[form_password]");
  $row = mysqli_fetch_array($result);
  if(is_array($row)){
    $_SESSION["usr_name"] = $row['usr_name'];
    header("location:'http://google.co.uk'");
    echo "this header does not work";
    echo $_SESSION['usr_name'];
  }else{
    $message = "No user found";
    echo "$message";
  }
}else{
  echo "i dont do anything";
}?>


<head>
  <script language='javascript'>
  function storeNumber( number )
  {
  var previousVal = document.getElementById("form_password").value;
  previousVal = previousVal + number.value;
  document.getElementById("form_password").value = previousVal;
   }

   function clearPassword(){
   document.getElementById("form_password").value = ""
   }
   window.onload = function passwordFocus(){
       document.getElementById("form_password").focus();
   };
   </script>
</head>

<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">

 <h1 class="alert alert-info" style="text-align:center;">Please Log In</h1>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col">
      <form class="" action="" method="post">
      <div class="col text-center">
        <input type="button" onmousedown="storeNumber(this)" value="7" class="btn btn-primary btn-lg space col-sm-3 h-40 font50">
        <input type="button" onmousedown="storeNumber(this)" value="8" class="btn btn-primary btn-lg space col-sm-3 h-40 font50">
        <input type="button" onmousedown="storeNumber(this)" value="9" class="btn btn-primary btn-lg space col-sm-3 h-40 font50">
      </div>
      <div class="col text-center">
        <input type="button" onmousedown="storeNumber(this)" value="4" class="btn btn-primary btn-lg space col-md-3 h-40 font50">
        <input type="button" onmousedown="storeNumber(this)" value="5" class="btn btn-primary btn-lg space col-md-3 h-40 font50">
        <input type="button" onmousedown="storeNumber(this)" value="6" class="btn btn-primary btn-lg space col-md-3 h-40 font50">
      </div>
      <div class="col text-center">
        <input type="button" onmousedown="storeNumber(this)" value="1" class="btn btn-primary btn-lg space col-md-3 h-40 font50">
        <input type="button" onmousedown="storeNumber(this)" value="2" class="btn btn-primary btn-lg space col-md-3 h-40 font50">
        <input type="button" onmousedown="storeNumber(this)" value="3" class="btn btn-primary btn-lg space col-md-3 h-40 font50">
      </div>
      <div class="col text-center">
        <input type="button" onmousedown="clearPassword(this)" value="X" class="btn btn-primary btn-lg space col-md-3 h-40 font50">
        <input type="button" onmousedown="storeNumber(this)" value="0" class="btn btn-primary btn-lg space col-md-3 h-40 font50">

        <input name="submit_form_button" type="submit" value="GO" class="btn btn-primary btn-lg space col-md-3 h-40 font50">

      </div>
      <div class="col text-center">

        <input name="form_password" class="col-md-10 text-center form-control-lg font30" type="text" id="form_password" value="">

      </div>
    </form>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
