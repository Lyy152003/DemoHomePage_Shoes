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
        #input_giasanpham {
            width: 100%;
            max-width: 460px;
            padding: 8px;
        }

        #select_danhmucsanpham,
        #select_dongsanpham,
        #select_kieudang {
            padding: 4px;
        }

        #textarea_thongtinsanpham {
            width: 100%;
            max-width: 460px;
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

        .color-option {
            width: 20px;
            height: 20px;
            display: inline-block;
            cursor: pointer;
            border-radius: 50%;
            margin-right: 10px;
        }

        .color-option.selected {
            border: 2px solid #F15E2C;
        }

        #div_table_size {
            display: flex;
            justify-content: center;
            align-items: center;
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

        #div_hienthi_anh3 img {
            width: 270px;
            height: 180px;
        }

        #div_hienthi_anh4 img {
            width: 270px;
            height: 180px;
        }


        .div_upload {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        #div_upload_anh_1,
        #div_upload_anh_2,
        #div_upload_anh_3,
        #div_upload_anh_4 {
            flex: 0 0 calc(48% - 10px);
            box-sizing: border-box;
        }

        #div_upload_anh_1,
        #div_upload_anh_2,
        #div_upload_anh_3,
        #div_upload_anh_4 {
            margin-bottom: 30px;
        }

        #div_color_size_uploadimage {
            display: none;
        }

        .div_upload {
            display: flex;
            max-width: 600px;
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        /* #div_upload_anh_1 {
            background-color: green;
        }

        #div_upload_anh_2 {
            background-color: red;
        }

        #div_upload_anh_3 {
            background-color: purple;
        }

        #div_upload_anh_4 {
            background-color: yellow;
        } */

        .div_upload {
            margin: auto;
        }

        #div_color_size_uploadimage {
            border-style: solid;
            max-width: 1000px;
            border-color: #ff5f17;
        }

        #div_products_add_enter {
            margin-left: 40px;
        }

        #div_danhmucsanpham,
        #div_dongsanpham,
        #div_kieudang {
            flex: 1;
            margin-right: 0px;
        }

        #div_danhmuc_dong_kieudang {
            display: flex;
            flex-wrap: wrap;
        }

        .btn-themsanpham {
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

        .btn-themsanpham:hover {
            background: #d54e10;
        }

        .btn-themsanpham-text {
            display: inline-flex;
            align-items: center;
            padding: 0 5px;
            color: #fff;
            height: 100%;
        }
    </style>
</head>

<body>
    <?php
    include('../../navigation/menu_navigation.php');
    ?>
    <section class="section_themsanpham">

        <div class="div_products_add_1 ">

            <p class="text text-hnm">Thêm sản phẩm</p>
            <div id="div_products_add_enter">
                <div id="div_themsanpham">
                    <label id="label_tensanpham">Tên sản phẩm</label>
                    <input type="text" id="input_tensanpham" name="input_tensanpham" placeholder="Nhập tên sản phẩm">
                </div>
                <br>
                <div id="div_giasanpham">
                    <label id="label_giasanpham">Giá sản phẩm</label>
                    <input type="text" id="input_giasanpham" name="input_giasanpham" placeholder="Nhập giá sản phẩm">
                </div>
                <br>
                <div id="div_danhmuc_dong_kieudang">
                    <div id="div_danhmucsanpham">
                        <label id="label_danhmucsanpham">Danh mục</label>
                        <select id="select_danhmucsanpham" name="select_danhmucsanpham">
                            <option>Nam</option>
                            <option>Nữ</option>
                        </select>
                    </div>
                    <br>
                    <div id="div_dongsanpham">
                        <label id="label_dongsanpham">Dòng</label>
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
                </div>
                <br>
                <div id="div_thongtinsanpham">
                    <label id="label_thongtinsanpham">Thông tin sản phẩm</label>
                    <textarea id="textarea_thongtinsanpham" name="textarea_thongtinsanpham" rows="8"></textarea>
                </div>
                <button type="button" class="btn-themsanpham">
                    <span class="btn-themsanpham-text" name="btn-themsanpham-text"><b>Thêm sản phẩm</b></span>
                </button>

            </div>
        </div>

        <div class="div_products_add_2">
            <label id="label_mausanpham">Màu sản phẩm</label>
            <div class="color-box">
                <div id="color-box_mauden" name="color-box_mauden" class="color-option"></div>
                <div id="color-box_maunau" name="color-box_maunau" class="color-option"></div>
                <div id="color-box_mautrang" name="color-box_mautrang" class="color-option"></div>
            </div>
            <div id="div_color_size_uploadimage">
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
                <div class="div_upload">
                    <div id="div_upload_anh_1">
                        <label id="label_anh1"><b>Ảnh 1</b> </label><br>
                        <input type="file" id="input_upload_anh_1" name="input_upload_anh_1" accept=".jpg, .jpeg, .png">
                        <div id="div_hienthi_anh1"></div>
                    </div>
                    <div id="div_upload_anh_2">
                        <label id="label_anh2"><b>Ảnh 2</b> </label><br>
                        <input type="file" id="input_upload_anh_2" name="input_upload_anh_2" accept=".jpg, .jpeg, .png">
                        <div id="div_hienthi_anh2"></div>
                    </div>
                </div>
                <div class="div_upload">
                    <div id="div_upload_anh_3">
                        <label id="label_anh3"><b>Ảnh 3</b> </label><br>
                        <input type="file" id="input_upload_anh_3" name="input_upload_anh_3" accept=".jpg, .jpeg, .png">
                        <div id="div_hienthi_anh3"></div>
                    </div>
                    <div id="div_upload_anh_4">
                        <label id="label_anh4"><b>Ảnh 4</b> </label><br>
                        <input type="file" id="input_upload_anh_4" name="input_upload_anh_4" accept=".jpg, .jpeg, .png">
                        <div id="div_hienthi_anh4"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="../../../jq.js"></script>
<script src="../dashboard/admin_dashboard.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const colorOptions = document.querySelectorAll(".color-option");
        const colorSizeUploadImage = document.getElementById("div_color_size_uploadimage");

        colorOptions.forEach(function(option) {
            option.addEventListener("click", function() {

                colorSizeUploadImage.style.display = "block";
            });
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const colorOptions = document.querySelectorAll(".color-option");
        const colorSizeUploadImage = document.getElementById("div_color_size_uploadimage");

        colorOptions.forEach(function(option) {
            option.addEventListener("click", function() {
                colorOptions.forEach(function(el) {
                    el.classList.remove("selected");
                });

                option.classList.add("selected");

                resetDivColorSizeUploadImage();
            });
        });

        function resetDivColorSizeUploadImage() {
            const sizeInputs = document.querySelectorAll(".input_size");
            sizeInputs.forEach(function(input) {
                input.value = "";
            });
            resetImagePreview("div_hienthi_anh1", "input_upload_anh_1");
            resetImagePreview("div_hienthi_anh2", "input_upload_anh_2");
            resetImagePreview("div_hienthi_anh3", "input_upload_anh_3");
            resetImagePreview("div_hienthi_anh4", "input_upload_anh_4");
        }

        function resetImagePreview(imageDivId, inputFileId) {
            const fileUploader = document.getElementById(inputFileId);
            const reader = new FileReader();
            const imageGrid = document.getElementById(imageDivId);

            fileUploader.value = "";
            imageGrid.innerHTML = "";
        }
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
<script>
    const fileUploader_3 = document.getElementById('input_upload_anh_3');
    const reader_3 = new FileReader();
    const imageGrid_3 = document.getElementById('div_hienthi_anh3');
    let currentImage_3 = null;

    fileUploader_3.addEventListener('change', (event) => {
        const files = event.target.files;
        const file = files[0];
        reader_3.readAsDataURL(file);

        reader_3.addEventListener('load', (event) => {
            const img = document.createElement('img');
            imageGrid_3.innerHTML = ''; // Clear existing images
            imageGrid_3.appendChild(img);
            img.src = event.target.result;
            img.alt = file.name;

            // Update the currentImage variable with the new image information
            currentImage_3 = {
                src: event.target.result,
                alt: file.name
            };
        });
    });

    // Hiển thị ảnh đã upload lần cuối vào div_hienthi_anh1
    if (currentImage_3) {
        const img = document.createElement('img');
        imageGrid_3.innerHTML = ''; // Clear existing images
        imageGrid_3.appendChild(img);
        img.src = currentImage_3.src;
        img.alt = currentImage_3.alt;
    }
</script>
<script>
    const fileUploader_4 = document.getElementById('input_upload_anh_4');
    const reader_4 = new FileReader();
    const imageGrid_4 = document.getElementById('div_hienthi_anh4');
    let currentImage_4 = null;

    fileUploader_4.addEventListener('change', (event) => {
        const files = event.target.files;
        const file = files[0];
        reader_4.readAsDataURL(file);

        reader_4.addEventListener('load', (event) => {
            const img = document.createElement('img');
            imageGrid_4.innerHTML = ''; // Clear existing images
            imageGrid_4.appendChild(img);
            img.src = event.target.result;
            img.alt = file.name;

            // Update the currentImage variable with the new image information
            currentImage_4 = {
                src: event.target.result,
                alt: file.name
            };
        });
    });

    // Hiển thị ảnh đã upload lần cuối vào div_hienthi_anh1
    if (currentImage_4) {
        const img = document.createElement('img');
        imageGrid_4.innerHTML = ''; // Clear existing images
        imageGrid_4.appendChild(img);
        img.src = currentImage_4.src;
        img.alt = currentImage_4.alt;
    }
</script>