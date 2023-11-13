<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <h1>THÊM SẢN PHẨM THÀNH CÔNG</h1>
        <input type="submit" name="continue" value="nhấn để tiếp tục">
    </form>

    <?php
        if(isset($_GET['continue'])){
            header('Location:../admin_dashboard.php');
        }
    ?>
</body>
</html>