<?php
include('config/config.php');
$tensanpham = $_POST['tensanpham'];
$danhmuc = $_POST['danhmuc'];
if(isset($_POST['themsanpham'])){
    $sql_themsp="INSERT INTO sanpham(tensp,danhmucsp) VALUES ('".$tensanpham."','".$danhmuc."')";
    mysqli_query($mysqli,$sql_themsp);
    header('Location:menu/themspthanhcong.php');
}
?>
