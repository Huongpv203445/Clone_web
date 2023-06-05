<?php
$con = mysqli_connect("localhost","root","","my_project");

// Check connection
if (mysqli_connect_errno()) {
  echo "Kết nối database không thành công! " . mysqli_connect_error();
  exit();
}
?>