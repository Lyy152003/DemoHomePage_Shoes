<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin Dashboard</title>
</head>

<body>
    <?php
    include('menu_navigation.php');//display menu
    include('menu/order_section.php');
    include('menu/customer_section.php');
    include('menu/product_section.php');
    include('menu/promotion_section.php');
    include('menu/blog_section.php');
    ?>
</body>

<script src="jq.js"></script>
<script src="admin_dashboard.js"></script>


</html>