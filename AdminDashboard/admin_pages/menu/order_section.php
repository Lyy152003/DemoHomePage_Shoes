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
                <th>Tổng tiền</th>
                <th>Chi tiết</th>
            </tr>
            <tr>
                <td>001</td>
                <td>KH01</td>
                <td>17-11-2023</td>
                <td>Chuyển khoản</td>
                <td>2500000</td>
                <td><a href="#"><i class='bx bx-receipt'></i></a></td>
            </tr>
        </table>
    </div>
</section>