<?php
$mysqli = new mysqli("localhost","root","","sp");

// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nối SQL lỗi: " . $mysqli->connect_error;
  exit();
}
?>