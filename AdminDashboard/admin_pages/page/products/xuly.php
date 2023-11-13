<?php
include('../../../config/config.php');//lôi kết nối ra
$tensanpham = $_POST['tensanpham'];
$danhmuc = $_POST['danhmuc'];
if(isset($_POST['themsanpham'])){
    $sql_themsp="INSERT INTO sanpham(tensp,danhmucsp) VALUES ('".$tensanpham."','".$danhmuc."')";
    mysqli_query($mysqli,$sql_themsp);
    header('Location:products_management.php');
}
else{
    $idsanpham = $_GET['idsanpham'];
    $sql_xoa_sanpham = "DELETE FROM sanpham WHERE id = '".$idsanpham."'";
    mysqli_query($mysqli, $sql_xoa_sanpham);
}
?>
