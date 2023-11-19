<style>
    .customer_order_list_container {
        margin-top: 60px;
    }

    .customer_order_list {
        text-align: center;
    }

    .customer_order_list tr th {
        background-color: #ff5f17;
        color: white;
    }

    .customer_order_list tr td {
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
<section class="home home-hnm" id="customer-order-section">
    <div class="text text-hnm">Đơn hàng của khách</div>
    <div class="customer_order_list_container">
        <table class="customer_order_list" border="1" style="border-collapse:collapse;width:100%">
            <tr>
                <th>ID đơn hàng</th>
                <th>Ngày đặt hàng</th>
                <th>Hình thức thanh toán</th>
                <th>Tổng tiền</th>
                <th>Chi tiết</th>
            </tr>
            <tr>
                <td id="id_customer_order_list_idorder" name="id_customer_order_list_idorder">001</td>
                <td id="id_customer_order_list_orderdate" name="id_customer_order_list_orderdate">17-11-2023</td>
                <td id="id_customer_order_list_purchasetype" name="id_customer_order_list_purchasetype">Chuyển khoản</td>
                <td id="id_customer_order_list_tongtien" name="id_customer_order_list_tongtien">2500000</td>
                <td><a href="order_detail.php"><i class='bx bx-receipt'></i></a></td>
            </tr>
        </table>
    </div>
</section>