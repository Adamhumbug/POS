<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if(isset($_POST['submit_form_button'])){
include '../dbconn.php';
  //submit button pressed
// make a variable out of the password field
$password = mysqli_escape_string($conn,$_POST['form_password']);
//check if the password field is empty
if(empty($password)){
  //what to do if password field is empty
  header("Location: ../index.php?login=nopass");
  exit();
}else{
  //what to do if password field is not empty

  $sql = "SELECT * FROM pos_usr WHERE usr_pass = '$password'";
  // var_dump($sql);
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  // echo "i have done the SQL <br/>";
  if ($row){
    //what to do if rows are found
    $_SESSION['usr_name'] = $row['usr_name'];
    $_SESSION['usr_admin'] = $row['usr_level'];
    header("Location: ../home.php?logon=success");

  }else {
    //what to do if no rows are found=
    // echo "<div class='alert alert-warning'>No Rows Found</div>";
    // var_dump($result);
    // var_dump($row);

  }

}

}
?>
<head>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
