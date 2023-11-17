<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dashboard/admin_dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Chi tiết đơn hàng</title>
    <style>
        .section_orderdetail {
            position: relative;
            left: 250px;
            height: 100vh;
            width: calc(100% - 250px);
            background: var(--body-color);
            transition: var(--tran-05);
        }

        .sidebar-hnm.close~.section_orderdetail {
            left: 88px;
            width: calc(100% - 88px);
        }

        .section_orderdetail .text-hnm {
            font-size: 30px;
            font-weight: 500;
            color: var(--text-color);
            padding: 8px 40px;
            caret-color: transparent;
        }

        .section_orderdetail {
            display: flex;
            align-items: stretch;
        }

        .div_orders_detail_1 {
            flex: 1;
            padding: 10px;
            align-items: center;
        }

        #div_orders_display {
            margin-left: 40px;
        }

        #div_hienthi_iddonhang,
        #div_hienthi_idkhachhang,
        #div_hienthi_ngaydathang,
        #div_hienthi_hinhthucthanhtoan {
            margin-bottom: 10px;
        }

        #label_iddonhang,
        #label_idkhachhang,
        #label_ngaydathang,
        #label_hinhthucthanhtoan {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        #display_iddonhang,
        #display_idkhachhang,
        #display_ngaydathang,
        #display_hinhthucthanhtoan {
            width: 100%;
            max-width: 260px;
            padding: 8px;
        }

        .div_orders_detail_2 {
            flex: 2;
            padding: 10px;
        }
    </style>
</head>

<body>
    <?php
    include('../../navigation/menu_navigation.php');
    ?>
    <section class="section_orderdetail">
        <div class="div_orders_detail_1">
            <p class="text text-hnm">Chi tiết đơn hàng</p>
            <div id="div_orders_display">
                <div id="div_hienthi_iddonhang">
                    <label id="label_iddonhang">ID đơn hàng</label>
                    <input type="text" id="display_iddonhang" name="display_iddonhang" disabled="disabled">
                </div>
                <div id="div_hienthi_idkhachhang">
                    <label id="label_idkhachhang">ID khách hàng</label>
                    <input type="text" id="display_idkhachhang" name="display_idkhachhang" disabled="disabled">
                </div>
                <div id="div_hienthi_ngaydathang">
                    <label id="label_ngaydathang">Ngày đặt hàng</label>
                    <input type="text" id="display_ngaydathang" name="display_ngaydathang" disabled="disabled">
                </div>
                <div id="div_hienthi_hinhthucthanhtoan">
                    <label id="label_hinhthucthanhtoan">Hình thức thanh toán</label>
                    <input type="text" id="display_hinhthucthanhtoan" name="display_hinhthucthanhtoan" disabled="disabled">
                </div>
            </div>
        </div>
        <div class="div_orders_detail_2">
            <table class="order_detail_list" border="1" style="border-collapse:collapse;width:100%">
                <tr>
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>PROCOLORSIZE ID</th>
                    <th>Số lượng</th>
                    <th>Giá tiền</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Giày nam</td>
                    <td>SP0100244</td>
                    <td>2</td>
                    <td>2800000</td>
                </tr>
                <tr>
                    <td colspan="4">Tổng tiền hàng</td>
                    <td>2800000</td>
                </tr>
                <tr>
                    <td colspan="4">Phí vận chuyển</td>
                    <td>40000</td>
                </tr>
                <tr>
                    <td colspan="4">Thành tiền</td>
                    <td>2840000</td>
                </tr>
            </table>
        </div>
    </section>
</body>
<script src="../../../jq.js"></script>
<script src="../dashboard/admin_dashboard.js"></script>

</html>