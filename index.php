<?php
session_start();
?>

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
      <form class="" action="actions/login_action.php" method="POST">
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

        <input id="submit_form_button" name="submit_form_button" type="submit" value="GO" class="btn btn-primary btn-lg space col-md-3 h-40 font50">

      </div>
      <div class="col text-center">

        <input name="form_password" class="col-md-10 text-center form-control-lg font30" type="text" id="form_password" value="">

      </div>
    </form>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
