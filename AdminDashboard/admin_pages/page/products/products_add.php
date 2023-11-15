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

        #label_tensanpham,
        #label_giasanpham,
        #label_danhmucsanpham,
        #label_dongsanpham,
        #label_kieudang,
        #label_thongtinsanpham,
        #label_mausanpham {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        #input_tensanpham,
        #input_giasanpham,
        #select_danhmucsanpham,
        #select_dongsanpham,
        #select_kieudang,
        #textarea_thongtinsanpham {
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
            margin-right: 10px;
            background-color: black;
            width: 20px;
            height: 20px;
            display: inline-block;
            cursor: pointer;
            border-radius: 50%;
        }

        #color-box_maunau {
            margin-right: 10px;
            background-color: brown;
            width: 20px;
            height: 20px;
            display: inline-block;
            cursor: pointer;
            border-radius: 50%;
        }

        #color-box_mautrang {
            background-color: white;
            width: 20px;
            height: 20px;
            display: inline-block;
            cursor: pointer;
            border-radius: 50%;
        }

        .color-box {
            background-color: red;
        }

        .color-option {
            width: 20px;
            height: 20px;
            display: inline-block;
            cursor: pointer;
            border-radius: 50%;
            margin-right: 10px;
            /* Add transition for a smooth effect */
        }

        .color-option.selected {
            border: 2px solid #F15E2C;
            /* Green border for the selected state */
        }

        #div_table_size {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: yellow;
        }

        #div_table_size table form tr td {
            margin-right: 10px;
        }


        #label_size36,
        #label_size37,
        #label_size38,
        #label_size39,
        #label_size40,
        #label_size41,
        #label_size42,
        #label_size43,
        #label_size44 {
            font-weight: bold;
        }

        #div_table_size table tr td {
            padding: 15px;
        }

        .input_size {
            max-width: 140px;
            padding: 6px;
        }

        #div_hienthi_anh1 img {
            width: 270px;
            height: 180px;
        }

        #div_hienthi_anh2 img {
            width: 270px;
            height: 180px;
        }

        #div_upload_anh_1 {
            background-color: #F15E2C;
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
                <label id="label_tensanpham">Tên sản phẩm</label>
                <input type="text" id="input_tensanpham" name="input_tensanpham">
            </div>
            <br>

            <div id="div_giasanpham">
                <label id="label_giasanpham">Giá sản phẩm</label>
                <input type="text" id="input_giasanpham" name="input_giasanpham">
            </div>
            <br>

            <div id="div_danhmucsanpham">
                <label id="label_danhmucsanpham">Danh mục sản phẩm</label>
                <select id="select_danhmucsanpham" name="select_danhmucsanpham">
                    <option>Nam</option>
                    <option>Nữ</option>
                </select>
            </div>
            <br>

            <div id="div_dongsanpham">
                <label id="label_dongsanpham">Dòng sản phẩm</label>
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
                <label id="label_kieudang">Kiểu dáng</label>
                <select id="select_kieudang" name="select_kieudang">
                    <option name="lowtop">Low Top</option>
                    <option name="hightop">High Top</option>
                    <option name="midtop">Mid Top</option>
                    <option name="mule">Mule</option>
                </select>
            </div>
            <br>


            <div id="div_thongtinsanpham">
                <label id="label_thongtinsanpham">Thông tin sản phẩm</label>
                <br>
                <textarea id="textarea_thongtinsanpham" name="textarea_thongtinsanpham" rows="5"></textarea>
            </div>
        </div>
        <div class="div_products_add_2">
            <label id="label_mausanpham">Màu sản phẩm</label>
            <div class="color-box">
                <div id="color-box_mauden" class="color-option"></div>
                <div id="color-box_maunau" class="color-option"></div>
                <div id="color-box_mautrang" class="color-option"></div>
            </div>
            <div id="div_table_size">
                <table>
                    <form>
                        <tr>
                            <td>
                                <div>
                                    <label id="label_size36">Size 36</label>
                                    <input class="input_size" id="input_size36" name="input_size36" type="text" placeholder="Nhập số lượng...">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <label id="label_size39">Size 39</label>
                                    <input class="input_size" id="input_size39" name="input_size39" type="text" placeholder="Nhập số lượng...">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <label id="label_size42">Size 42</label>
                                    <input class="input_size" id="input_size42" name="input_size42" type="text" placeholder="Nhập số lượng...">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <label id="label_size37">Size 37</label>
                                    <input class="input_size" id="input_size37" name="input_size37" type="text" placeholder="Nhập số lượng...">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <label id="label_size40">Size 40</label>
                                    <input class="input_size" id="input_size40" name="input_size40" type="text" placeholder="Nhập số lượng...">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <label id="label_size43">Size 43</label>
                                    <input class="input_size" id="input_size43" name="input_size43" type="text" placeholder="Nhập số lượng...">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <label id="label_size38">Size 38</label>
                                    <input class="input_size" id="input_size38" name="input_size38" type="text" placeholder="Nhập số lượng...">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <label id="label_size41">Size 41</label>
                                    <input class="input_size" id="input_size41" name="input_size41" type="text" placeholder="Nhập số lượng...">
                                </div>
                            </td>
                            <td>
                                <div>
                                    <label id="label_size44">Size 44</label>
                                    <input class="input_size" id="input_size44" type="text" placeholder="Nhập số lượng...">
                                </div>
                            </td>
                        </tr>
                    </form>
                </table><br>
            </div>
            <br>
            <div id="div_upload_anh_1">
                <label>Ảnh 1 </label><br>
                <input type="file" id="input_upload_anh_1" name="input_upload_anh_1" accept=".jpg, .jpeg, .png">
                <div id="div_hienthi_anh1"></div>
            </div>
            <div id="div_upload_anh_2">
                <label>Ảnh 2 </label><br>
                <input type="file" id="input_upload_anh_2" name="input_upload_anh_2" accept=".jpg, .jpeg, .png">
                <div id="div_hienthi_anh2"></div>
            </div>
            <div id="div_upload_anh_3">
                <label>Ảnh 3 </label><br>
                <input type="file" id="input_upload_anh_3" name="input_upload_anh_3" accept=".jpg, .jpeg, .png">
                <div id="div_hienthi_anh3"></div>
            </div>
            <div id="div_upload_anh_4">
                <label>Ảnh 4 </label><br>
                <input type="file" id="input_upload_anh_4" name="input_upload_anh_4" accept=".jpg, .jpeg, .png">
                <div id="div_hienthi_anh4"></div>
            </div>
        </div>
    </section>
</body>
<script src="../../../jq.js"></script>
<script src="../dashboard/admin_dashboard.js"></script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const colorOptions = document.querySelectorAll(".color-option");

        colorOptions.forEach(function(option) {
            option.addEventListener("click", function() {
                // Remove the selected class from all color options
                colorOptions.forEach(function(el) {
                    el.classList.remove("selected");
                });

                // Add the selected class to the clicked color option
                option.classList.add("selected");
            });
        });
    });
</script>
<script>
    const fileUploader_1 = document.getElementById('input_upload_anh_1');
    const reader_1 = new FileReader();
    const imageGrid_1 = document.getElementById('div_hienthi_anh1');
    let currentImage_1 = null;

    fileUploader_1.addEventListener('change', (event) => {
        const files = event.target.files;
        const file = files[0];
        reader_1.readAsDataURL(file);

        reader_1.addEventListener('load', (event) => {
            const img = document.createElement('img');
            imageGrid_1.innerHTML = ''; // Clear existing images
            imageGrid_1.appendChild(img);
            img.src = event.target.result;
            img.alt = file.name;

            // Update the currentImage variable with the new image information
            currentImage_1 = {
                src: event.target.result,
                alt: file.name
            };
        });
    });

    // Hiển thị ảnh đã upload lần cuối vào div_hienthi_anh1
    if (currentImage_1) {
        const img = document.createElement('img');
        imageGrid_1.innerHTML = ''; // Clear existing images
        imageGrid_1.appendChild(img);
        img.src = currentImage_1.src;
        img.alt = currentImage_1.alt;
    }
</script>
<script>
    const fileUploader_2 = document.getElementById('input_upload_anh_2');
    const reader_2 = new FileReader();
    const imageGrid_2 = document.getElementById('div_hienthi_anh2');
    let currentImage_2 = null;

    fileUploader_2.addEventListener('change', (event) => {
        const files = event.target.files;
        const file = files[0];
        reader_2.readAsDataURL(file);

        reader_2.addEventListener('load', (event) => {
            const img = document.createElement('img');
            imageGrid_2.innerHTML = ''; // Clear existing images
            imageGrid_2.appendChild(img);
            img.src = event.target.result;
            img.alt = file.name;

            // Update the currentImage variable with the new image information
            currentImage_2 = {
                src: event.target.result,
                alt: file.name
            };
        });
    });

    // Hiển thị ảnh đã upload lần cuối vào div_hienthi_anh1
    if (currentImage_2) {
        const img = document.createElement('img');
        imageGrid_2.innerHTML = ''; // Clear existing images
        imageGrid_2.appendChild(img);
        img.src = currentImage_2.src;
        img.alt = currentImage_2.alt;
    }
</script>
