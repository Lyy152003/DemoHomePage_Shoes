<style>
    .order_list_container {
        margin-top: 60px;
    }

    .order_list {
        text-align: center;
    }

    .order_list tr th {
        background-color: #ff5f17;
        color: white;
    }

    .order_list tr td {
        background-color: white;
        font-weight: bold;
    }
    .bx-receipt{
        font-size: 1.3em;
        color: black;
    }
    .bx-receipt:hover{
        color:#ff5f17;
    }
</style>
<section class="home home-hnm" id="order-section">
    <div class="text text-hnm">Đơn hàng</div>
    <div class="order_list_container">
        <table class="order_list" border="1" style="border-collapse:collapse;width:100%">
            <tr>
                <th>ID đơn hàng</th>
                <th>ID khách hàng</th>
                <th>Ngày đặt hàng</th>
                <th>Hình thức thanh toán</th>
                <th>ID mã giảm giá</th>
                <th>Tổng tiền</th>
                <th>Chi tiết</th>
            </tr>
            <tr>
                <td id="id_order_list_idorder" name="id_order_list_idorder">001</td>
                <td id="id_order_list_idcustomer" name="id_order_list_idcustomer">KH01</td>
                <td id="id_order_list_orderdate" name="id_order_list_orderdate">17-11-2023</td>
                <td id="id_order_list_purchasetype" name="id_order_list_purchasetype">Chuyển khoản</td>
                <td id="id_order_list_idpromotion" name="id_order_list_idpromotion">MGG001</td>
                <td id="id_order_list_tongtien" name="id_order_list_tongtien">2500000</td>
                <td><a href="order_detail.php"><i class='bx bx-receipt'></i></a></td>
            </tr>
        </table>
    </div>
</section>