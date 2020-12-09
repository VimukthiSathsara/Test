<?php
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'test');

$name  = $_POST['username'];
$password  = $_POST['password'];

$s = "select * from login where user = '$name' && pass = '$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
  header('location:event.php');
}
else{
  header('location:index.php');
}

 ?>
