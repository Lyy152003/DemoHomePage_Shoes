<style>
    .product_list tr #td_productimage img {
        width: 120px;
        height: 90px;
    }

    .product_list tr th {
        background-color: #ff5f17;
        color: white;
    }

    .product_list tr td {
        background-color: white;
        font-weight: bold;
    }

    .bx-trash,
    .bx-edit {
        color: black;
        font-size: 1.3em;
    }
    .bx-trash:hover{
        color:#ff5f17;
    }
    .bx-edit:hover{
        color:#ff5f17;
    }

    .product_list {
        text-align: center;
    }

    .product_list_container {
        margin-top: 60px;
    }

    .product-hnm .btn-add-product {
        display: flex;
        height: 35px;
        padding: 0;
        background: #ff5f17;
        border: none;
        outline: none;
        border-radius: 5px;
        overflow: hidden;
        font-family: "Quicksand", sans-serif;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
    }

    .product-hnm .btn-add-product:hover {
        background: #d54e10;
    }

    .product-hnm .btn-add-product .btn-add-product-text,
    .btn-add-product-icon {
        display: inline-flex;
        align-items: center;
        padding: 0 5px;
        color: #fff;
        height: 100%;
    }

    .product-hnm .btn-add-product .btn-add-product-icon {
        font-size: 1.5em;
        background: rgba(0, 0, 0, 0.08);
    }

    .btn-add-product-container {
        position: absolute;
        right: 0;
    }

    #themsanpham_text {
        text-decoration: none;
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
                <td id="td_productid" name="td_productid">SP01</td>
                <td id="td_productname" name="td_productname">Giày batas</td>
                <td id="td_productimage" name="td_productimage">
                    <img src="../../admin_pages_images/Pro_AV00203_2-500x500.jpeg">
                </td>
                <td id="td_productsize" name="td_productsize">36</td>
                <td id="td_productline" name="td_productline">Vintas</td>
                <td id="td_productstyle" name="td_productstyle">High top</td>
                <td id="td_productcolor" name="td_productcolor">Đỏ</td>
                <td id="td_productportfolio" name="td_productportfolio">Giày nam</td>
                <td id="td_productquantity" name="td_productquantity">100</td>
                <td id="td_productprice" name="td_productprice">1900000</td>
                <td>
                    <a href="#"><i class='bx bx-trash'></i></a> | <a href="products_edit.php"><i class='bx bx-edit'></i></a>
                </td>
            </tr>
        </table>
    </div>
</section>