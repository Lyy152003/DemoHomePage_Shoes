<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dashboard/admin_dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Thêm sản phẩm</title>
    <style>
        #div_themsanpham,
        #div_giasanpham,
        #div_danhmucsanpham,
        #div_dongsanpham,
        #div_kieudang,
        #div_thongtinsanpham {
            margin-bottom: 10px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input,
        select,
        textarea {
            width: 100%;
            max-width: 300px;
            /* Điều chỉnh giá trị này theo nhu cầu của bạn */
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        select {
            cursor: pointer;
        }

        #textarea_thongtinsanpham {
            resize: vertical;
        }

        /* Style cho phần "Thêm sản phẩm" */
        .text-hnm {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .section_themsanpham {
            position: relative;
            left: 250px;
            height: 100vh;
            width: calc(100% - 250px);
            background: var(--body-color);
            transition: var(--tran-05);
        }

        .sidebar-hnm.close~.section_themsanpham {
            left: 88px;
            width: calc(100% - 88px);
        }

        .section_themsanpham .text-hnm {
            font-size: 30px;
            font-weight: 500;
            color: var(--text-color);
            padding: 8px 40px;
            caret-color: transparent;
        }

        .section_themsanpham {
            display: flex;
            align-items: stretch;
            /* Đảm bảo chiều cao giữa các phần tử bằng nhau */
        }

        .div_products_add_1 {
            flex: 1;
            /* Chiều ngang nhỏ hơn div_test */
            padding: 10px;
            /* Thêm padding nếu cần thiết */
            background-color: aqua;
            align-items: center;
        }

        .div_products_add_2 {
            flex: 2;
            /* Chiều ngang lớn hơn div_products_add_1 */
            padding: 10px;
            /* Thêm padding nếu cần thiết */
        }

        #label_mausanpham {
            margin-top: 72px;
        }

        #color-box_mauden {
            background-color: black;
            width: 20px;
            height: 20px;
            display: inline-block;
            cursor: pointer;
        }

        #color-box_maunau {
            background-color: brown;
            width: 20px;
            height: 20px;
            display: inline-block;
            cursor: pointer;
            border-style: solid;
        }
        .color-box{
            background-color: red;
        }
    </style>
</head>

<body>
    <?php
    include('../../navigation/menu_navigation.php');
    ?>
    <section class="section_themsanpham">

        <div class="div_products_add_1">
            <div class="text text-hnm">Thêm sản phẩm</div>
            <div id="div_themsanpham">
                <label>Tên sản phẩm</label>
                <input type="text" id="input_tensanpham" name="input_tensanpham">
            </div>
            <br>

            <div id="div_giasanpham">
                <label>Giá sản phẩm</label>
                <input type="text" id="input_giasanpham" name="input_giasanpham">
            </div>
            <br>

            <div id="div_danhmucsanpham">
                <label>Danh mục sản phẩm</label>
                <select id="select_danhmucsanpham" name="select_danhmucsanpham">
                    <option>Nam</option>
                    <option>Nữ</option>
                </select>
            </div>
            <br>

            <div id="div_dongsanpham">
                <label>Dòng sản phẩm</label>
                <select id="select_dongsanpham" name="select_dongsanpham">
                    <option name="basas">Basas</option>
                    <option name="vintas">Vintas</option>
                    <option name="urbas">Urbas</option>
                    <option name="pattas">Pattas</option>
                    <option name="creas">Creas</option>
                    <option name="track6">Track 6</option>
                </select>
            </div>
            <br>

            <div id="div_kieudang">
                <label>Kiểu dáng</label>
                <select id="select_kieudang" name="select_kieudang">
                    <option name="lowtop">Low Top</option>
                    <option name="hightop">High Top</option>
                    <option name="midtop">Mid Top</option>
                    <option name="mule">Mule</option>
                </select>
            </div>
            <br>


            <div id="div_thongtinsanpham">
                <label>Thông tin sản phẩm</label>
                <br>
                <textarea id="textarea_thongtinsanpham" name="textarea_thongtinsanpham" rows="5"></textarea>
            </div>
        </div>
        <div class="div_products_add_2">
            <label id="label_mausanpham">Màu sản phẩm</label>
            <div class="color-box">
                <div id="color-box_mauden"></div>
                <div id="color-box_maunau"></div>
            </div>

        </div>
    </section>
</body>
<script src="../../../jq.js"></script>
<script src="../dashboard/admin_dashboard.js"></script>

</html>