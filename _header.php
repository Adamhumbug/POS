<?php
Session_start();
if(!isset($_SESSION['usr_name'])){
  header("Location:index.php");
}



?>
<head>
  <meta charset="utf-8">
  <title>Siege POS</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/custom.css">
<?php include "actions/functions.php"?>
</head>

<body>

<div class="alert alert-danger">
    <div class="text-right">
    <?php echo $_SESSION['usr_name'];?>
    <?php if ($_SESSION['usr_admin']='1'){
      echo '- Admin';
    } ?>
  </div>
</div>

<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>
