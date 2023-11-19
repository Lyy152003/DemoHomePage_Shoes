<style>
    .customer_list_container {
        margin-top: 60px;
    }

    .btn-add-customer-container {
        position: absolute;
        right: 0;
    }

    .customer_list {
        text-align: center;
    }

    .customer_list tr th {
        background-color: #ff5f17;
        color: white;
    }

    .customer_list tr td {
        background-color: white;
        font-weight: bold;
    }
    .bx-cart{
        font-size: 1.3em;
        color: black;
    }
    .bx-cart:hover{
        color:#ff5f17;
    }
    .bx-receipt{
        font-size: 1.3em;
        color: black;
    }
    .bx-receipt:hover{
        color:#ff5f17;
    }
</style>

<section class="customer customer-hnm tab-content" id="customer-section">
    <div class="text text-hnm">Khách hàng</div>
    <div class="customer_list_container">
        <table class="customer_list" border="1" style="border-collapse:collapse;width:100%">
            <tr>
                <th>ID</th>
                <th>Họ tên khách hàng</th>
                <th>Giới tính</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Giỏ hàng</th>
                <th>Đơn mua</th>
            </tr>
            <tr>
                <td id="td_customerid" name="td_customerid">KH01</td>
                <td id="td_customername" name="td_customername">Lê Nguyễn Nhật Minh</td>
                <td id="td_customersex" name="td_customersex">Nam</td>
                <td id="td_customeraddress" name="td_customeraddress">ABC đường XYZ</td>
                <td id="td_customerphonenumber" name="td_customerphonenumber">09090099</td>
                <td id="td_customeremail" name="td_customeremail">lenguyennhatminh@gmail.com</td>
                <td><a href="carts_management.php"><i class='bx bx-cart'></i></a></td>
                <td><a href="../orders/customer_orders_management.php"><i class='bx bx-receipt'></i></a></td>
            </tr>
        </table>
    </div>
</section>