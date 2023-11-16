<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dashboard/admin_dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Thêm khuyến mãi</title>
    <style>
        .section_themkhuyenmai {
            position: relative;
            left: 250px;
            height: 100vh;
            width: calc(100% - 250px);
            background: var(--body-color);
            transition: var(--tran-05);
        }

        .sidebar-hnm.close~.section_themkhuyenmai {
            left: 88px;
            width: calc(100% - 88px);
        }

        .section_themkhuyenmai .text-hnm {
            font-size: 30px;
            font-weight: 500;
            color: var(--text-color);
            padding: 8px 40px;
            caret-color: transparent;
        }

        .section_themkhuyenmai {
            display: flex;
            align-items: stretch;
        }
    </style>
</head>

<body>
    <?php
    include('../../navigation/menu_navigation.php');
    ?>
    <section class="section_themkhuyenmai">

        <div class="div_promotions_add_1">
            <p class="text text-hnm">Thêm sản phẩm</p>
            <div id="div_promotions_add_enter">
                <div id="div_themtenkhuyenmai">
                    <label id="label_tenkhuyenmai">Tên khuyến mãi</label>
                    <input type="text" id="input_tenkhuyenmai" name="input_tenkhuyenmai" placeholder="Nhập tên khuyến mãi">
                </div>
                <div id="div_themngaybatdaukhuyenmai">
                    <label id="label_ngaybatdaukhuyenmai">Ngày bắt đầu</label>
                    <input type="date" id="input_ngaybatdaukhuyenmai" name="input_ngaybatdaukhuyenmai" min="2023-11-16">
                </div>
                <div id="div_themngayketthuckhuyenmai">
                    <label id="label_ngayketthuckhuyenmai">Ngày kết thúc</label>
                    <input type="date" id="input_ngayketthuckhuyenmai" name="input_ngayketthuckhuyenmai" min="2023-11-17">
                </div>

            </div>
    </section>
</body>
<script src="../../../jq.js"></script>
<script src="../dashboard/admin_dashboard.js"></script>

</html>