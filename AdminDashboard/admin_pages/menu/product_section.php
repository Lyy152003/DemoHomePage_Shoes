<?php
$sql_lietke_sanpham = "SELECT * FROM sanpham";
$query_lieke_sanpham = mysqli_query($mysqli, $sql_lietke_sanpham);
?>
<section class="product product-hnm tab-content" id="product-section">
    <div class="text text-hnm">Sản phẩm</div>
    <table>
        <form method="POST" action="xuly.php">
            <tr>
                <th>Tên sản phẩm</th>
                <th>Danh mục</th>
            </tr>
            <tr>
                <td>
                    <input type="text" name="tensanpham">
                </td>
                <td>
                    <input type="text" name="danhmuc">
                </td>
                <td>
                    <input type="submit" name="themsanpham" value="Thêm sản phẩm">
                </td>
            </tr>
        </form>
    </table>
    <table border="1" style="border-collapse: collapse;">
        <tr>
            <th>Thứ tự</th>
            <th>Tên sản phẩm</th>
            <th>Danh mục</th>
            <th>Xóa/Sửa</th>
        </tr>
        <?php
        $i = 0;
        while ($row = mysqli_fetch_array($query_lieke_sanpham)) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $row['tensp'] ?></td>
                <td><?php echo $row['danhmucsp'] ?></td>
                <td><a href="xuly.php?idsanpham=<?php echo $row['id']?>">Xóa</a> | <a href="#">Sửa</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</section>