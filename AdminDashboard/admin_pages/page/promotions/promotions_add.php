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

        .div_promotions_add_1 {
            flex: 1;
            padding: 10px;
            align-items: center;
        }

        .div_promotions_add_2 {
            flex: 2;
            padding: 10px;
        }

        #div_promotions_add_enter {
            margin-left: 40px;
        }

        #div_themtenkhuyenmai,
        #div_themngaybatdaukhuyenmai,
        #div_themngayketthuckhuyenmai,
        #div_themdiscountpercentage {
            margin-bottom: 10px;
        }

        #label_tenkhuyenmai,
        #label_ngaybatdaukhuyenmai,
        #label_ngayketthuckhuyenmai,
        #label_discountpercentage,
        #label_chonkhuyenmai {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        #input_tenkhuyenmai {
            width: 100%;
            max-width: 317px;
            padding: 8px;
        }

        #input_discountpercentage {
            width: 100%;
            max-width: 290px;
            padding: 8px;
        }

        #div_ngaybatdaukhuyenmai_ngayketthuckhuyenmai {
            display: flex;
            flex-wrap: wrap;
        }

        #div_themngaybatdaukhuyenmai,
        #div_themngayketthuckhuyenmai {
            flex: 1;
            margin-right: 0px;
        }

        #input_ngaybatdaukhuyenmai,
        #input_ngayketthuckhuyenmai {
            padding: 8px;
        }

        #label_chonkhuyenmai {
            margin-top: 72px;
        }

        .text-hnm {
            font-size: 1.5em;
            font-weight: bold;
            margin-bottom: 20px;
        }

        #div_radio_chonkhuyenmai {
            margin-bottom: 20px;
        }

        #input_radio_sanphamcuthe {
            margin-bottom: 10px;
        }

        #input_radio_dongsanpham{
            margin-bottom: 10px;
        }

        #select_khuyenmai_dongsanpham {
            padding: 4px;
            margin-left: 18px;
        }

        .btn-themkhuyenmai {
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

        .btn-themkhuyenmai:hover {
            background: #d54e10;
        }

        .btn-themkhuyenmai-text {
            display: inline-flex;
            align-items: center;
            padding: 0 5px;
            color: #fff;
            height: 100%;
        }
        #id_table_sanphamcuthe {
            border: solid 3px #ff5f17;
        }
        #id_table_sanphamcuthe tr td #input_nhapidsanphamcuthe {
            padding: 8px;
        }

        #id_table_sanphamcuthe tr td {
            height: 130px;
            width: 130px;
            padding-left: 10px;
            padding-right: 10px;
            background-color: white;
            border: solid 3px #ff5f17;
        }

        #id_table_sanphamcuthe tr td img {
            height: 90px;
            width: 120px;
        }

        .btn_themsanphamcuthe {
            display: none;
            height: 35px;
            padding: 0;
            background: #f1f1f1;
            border: none;
            outline: none;
            border-radius: 5px;
            overflow: hidden;
            font-family: "Quicksand", sans-serif;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .btn_themsanphamcuthe-text {
            display: inline-flex;
            align-items: center;
            padding: 0 5px;
            color: #ff5f17;
            height: 100%;
        }
        #select_khuyenmai_dongsanpham{
            display: none;
        }
    </style>
</head>

<body>
    <?php
    include('../../navigation/menu_navigation.php');
    ?>
    <section class="section_themkhuyenmai">

        <div class="div_promotions_add_1">
            <p class="text text-hnm">Thêm khuyến mãi</p>
            <div id="div_promotions_add_enter">
                <div id="div_themtenkhuyenmai">
                    <label id="label_tenkhuyenmai">Tên khuyến mãi</label>
                    <input type="text" id="input_tenkhuyenmai" name="input_tenkhuyenmai" placeholder="Nhập tên khuyến mãi">
                </div>
                <div id="div_ngaybatdaukhuyenmai_ngayketthuckhuyenmai">
                    <div id="div_themngaybatdaukhuyenmai">
                        <label id="label_ngaybatdaukhuyenmai">Ngày bắt đầu</label>
                        <input type="date" id="input_ngaybatdaukhuyenmai" name="input_ngaybatdaukhuyenmai" min="2023-11-17">
                    </div>
                    <div id="div_themngayketthuckhuyenmai">
                        <label id="label_ngayketthuckhuyenmai">Ngày kết thúc</label>
                        <input type="date" id="input_ngayketthuckhuyenmai" name="input_ngayketthuckhuyenmai" min="2023-11-18">
                    </div>
                </div>

                <div id="div_themdiscountpercentage">
                    <label id="label_discountpercentage">% giảm giá</label>
                    <input type="text" id="input_discountpercentage" name="input_discountpercentage">
                    <span>%</span>
                </div>
                <button type="button" class="btn-themkhuyenmai">
                    <span class="btn-themkhuyenmai-text" name="btn-themkhuyenmai-text"><b>Thêm khuyến mãi</b></span>
                </button>
            </div>
        </div>
        <div class="div_promotions_add_2">
            <label id="label_chonkhuyenmai">Khuyến mãi theo:</label>
            <div id="div_radio_chonkhuyenmai">
                <input id="input_radio_sanphamcuthe" name="input_radio_sanphamcuthe" type="radio">Sản phẩm cụ thể</input><br>
                <button type="button" class="btn_themsanphamcuthe">
                    <span class="btn_themsanphamcuthe-text" name="btn_themsanphamcuthe-text"><b>+ Sản phẩm</b></span>
                </button>
                <table id="id_table_sanphamcuthe" name="id_table_sanphamcuthe" border="1" style="border-collapse:collapse;">

                </table>
            </div>
            <div id="div_promotion_select_dongsanpham" name="div_promotion_select_dongsanpham">
                <input type="radio" id="input_radio_dongsanpham" name="input_radio_dongsanpham">Dòng sản phẩm</input>
                <select id="select_khuyenmai_dongsanpham" name="select_khuyenmai_dongsanpham">
                    <option name="basas">Basas</option>
                    <option name="vintas">Vintas</option>
                    <option name="urbas">Urbas</option>
                    <option name="pattas">Pattas</option>
                    <option name="creas">Creas</option>
                    <option name="track6">Track 6</option>
                </select>
            </div>
        </div>
    </section>
</body>
<script src="../../../jq.js"></script>
<script src="../dashboard/admin_dashboard.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var radioSanPhamCuthe = document.getElementById("input_radio_sanphamcuthe");
        var radioDongSanPham = document.getElementById("input_radio_dongsanpham");
        var btnThemSanPhamCuthe = document.querySelector('.btn_themsanphamcuthe');
        var tableSanPhamCuthe = document.querySelector('#id_table_sanphamcuthe');
        var selectDongSanPham=document.querySelector('#select_khuyenmai_dongsanpham');
        radioSanPhamCuthe.addEventListener("change", function() {
            if (radioSanPhamCuthe.checked) {
                radioDongSanPham.checked = false;
                btnThemSanPhamCuthe.style.display = 'flex';
                selectDongSanPham.style.display='none';
                resetSelect();
            }
        });

        radioDongSanPham.addEventListener("change", function() {
            if (radioDongSanPham.checked) {
                selectDongSanPham.style.display='flex';
                radioSanPhamCuthe.checked = false;
                btnThemSanPhamCuthe.style.display = 'none'; // Ẩn nút khi chọn radio "Dòng sản phẩm"
                resetTable(); // Gọi hàm để reset bảng
            }
        });
        // Hàm để reset bảng
        function resetTable() {
            tableSanPhamCuthe.innerHTML = ''; // Xóa nội dung bảng
            // Các bước khác để reset dữ liệu theo nhu cầu của bạn
        }
         // Hàm để reset select
    function resetSelect() {
        selectDongSanPham.selectedIndex = 0; // Đặt lại index về giá trị mặc định (hoặc giá trị mong muốn khác)
        // Các bước khác để reset dữ liệu select theo nhu cầu của bạn
    }
    });
</script>
<script>


</script>
<script>
    let btnAdd = document.querySelector('.btn_themsanphamcuthe');
    let table = document.querySelector('#id_table_sanphamcuthe');
    btnAdd.addEventListener('click', () => {
        let template = `<tr>
                        <td><input type="text" id="input_nhapidsanphamcuthe" name="input_nhapidsanphamcuthe" placeholder="Nhập id sản phẩm"></td>
                        <td></td>
                    </tr>
        `;
        table.innerHTML += template;
    });
</script>

</html>