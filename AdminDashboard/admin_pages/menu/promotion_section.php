<style>
    .btn-add-promotion-container {
        position: absolute;
        right: 0;
    }
    #themkhuyenmai_text {
        text-decoration: none;
    }
    .promotion-hnm .btn-add-promotion {
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

    .promotion-hnm .btn-add-promotion:hover {
        background: #d54e10;
    }

    .promotion-hnm .btn-add-promotion .btn-add-promotion-text,
    .btn-add-promotion-icon {
        display: inline-flex;
        align-items: center;
        padding: 0 5px;
        color: #fff;
        height: 100%;
    }

    .promotion-hnm .btn-add-promotion .btn-add-promotion-icon {
        font-size: 1.5em;
        background: rgba(0, 0, 0, 0.08);
    }

    .btn-add-promotion-container {
        position: absolute;
        right: 0;
    }
    .promotion_list_container {
        margin-top: 60px;
    }
    .promotion_list tr th {
        background-color: #ff5f17;
        color: white;
    }

    .promotion_list tr td {
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
    .promotion_list {
        text-align: center;
    }

    .promotion_list_container {
        margin-top: 60px;
    }
    
</style>
<section class="promotion promotion-hnm tab-content" id="promotion-section">
    <div class="text text-hnm">Khuyến mãi</div>
    <div class="btn-add-promotion-container">
        <a href="promotions_add.php" id="themkhuyenmai_text">
            <button type="button" class="btn-add-promotion">
                <span class="btn-add-promotion-text"><b>Thêm khuyến mãi</b></span>
                <span class="btn-add-promotion-icon">
                    <i class='bx bx-plus'></i>
                </span>
            </button>
        </a>
    </div>
    <div class="promotion_list_container">
        <table class="promotion_list" border="1" style="border-collapse:collapse;width:100%">
            <tr>
                <th>ID Khuyến mãi</th>
                <th>Tên khuyến mãi</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>% Giảm giá</th>
                <th>Xóa / Sửa<th>
            </tr>
            <tr>
                <td id="td_promotion_id" name="td_promotion_id">KM01</td>
                <td id="td_promotion_name" name="td_promotion_name">Khuyến mãi 20-11</td>
                <td id="td_promotion_startdate" name="td_promotion_startdate">20-11-2023</td>
                <td id="td_promotion_enddate" name="td_promotion_enddate">30-11-2023</td>
                <td id="td_promotion_discountpercentage" name="td_promotion_discountpercentage">25%</td>
                <td>
                    <a href="#"><i class='bx bx-trash'></i></a> | <a href="promotions_edit.php"><i class='bx bx-edit'></i></a>
                </td>
            </tr>
        </table>
    </div>
</section>