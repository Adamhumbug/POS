<?php

if(!isset($_SESSION['usr_name'])){
  header("Location:index.php");
}
if (!isset($_SESSION)) {
  session_start();
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>
<head>
  <meta charset="utf-8">
  <title>Siege POS</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/custom.css">
<?php include "actions/functions.php";?>
</head>


<body>

<div class="alert alert-danger">
    <div class="text-right">
      <?php   print_r($_SESSION); ?>
    <?php echo $_SESSION['usr_name'];?>
    <?php 
    if ($_SESSION['usr_level']=='0'){
      echo ' - User';
    }else{
      if($_SESSION['usr_level']=='1'){
        echo ' - Admin';
      }else{
        if($_SESSION['usr_level']=='10'){
          echo ' - SUPER USER';
        }
      }
    } 
      ?>
  </div>
</div>
