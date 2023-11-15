<style>
    .product_list tr #anh_sanpham img {
        width: 120px;
        height: 90px;
    }
    .product_list tr th{
        background-color: #ff5f17;
        color: white;
    }
    .product_list tr td{
        background-color: white;
        font-weight: bold;
    }
    
</style>
<section class="product product-hnm tab-content" id="product-section">
    <div class="text text-hnm">Sản phẩm</div>
    <div class="btn-add-product-container">
        <a href="products_add.php" id="themsanpham_text">
            <button type="button" class="btn-add-product">
                <span class="btn-add-product-text"><b>Thêm sản phẩm</b></span>
                <span class="btn-add-product-icon">
                    <i class='bx bx-plus'></i>
                </span>
            </button>
        </a>
    </div>
    <div class="product_list_container">
        <table class="product_list" border="1" style="border-collapse: collapse; width:100%;">
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Ảnh</th>
                <th>Kích thước</th>
                <th>Dòng</th>
                <th>Kiểu dáng</th>
                <th>Màu sắc</th>
                <th>Danh mục</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Xóa / Sửa</th>
            </tr>
            <tr>
                <td>SP01</td>
                <td>Giày batas</td>
                <td id="anh_sanpham">
                    <img src="../../admin_pages_images/Pro_AV00203_2-500x500.jpeg">
                </td>
                <td>36</td>
                <td>Vintas</td>
                <td>High top</td>
                <td>Đỏ</td>
                <td>Giày nam</td>
                <td>100</td>
                <td>1900000</td>
                <td>
                    <a href="#"><i class='bx bx-trash'></i></a> | <a href="#"><i class='bx bx-edit'></i></a>
                </td>
            </tr>
        </table>
    </div>
</section>
<script>
    $(function() {
        $('.btn-add-product').click(function() {

        })
    })
</script>