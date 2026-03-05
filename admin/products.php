<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style_products.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <header>
            <h1>YOUR SHOP</h1>
            <div class="nav">
                <a href="./dashboard.php">Dashboard</a>
                <a href="./products.php">Sản phẩm</a>
                <a href="./orders.php">Đơn hàng</a>
                <a href="./customers.php">Khách hàng</a>
                <a href="../logout.php">Đăng xuất</a>
            </div>

        </header>
        <div class="page-header">
            <h2>Quản lý Sản phẩm</h2>
            <button class="btn-add" type="button">+ Thêm sản phẩm</button>
        </div>
        <div class="table-card">
            <div class="table-header">
                <span class="id">ID</span>
                <span class="img">Hình ảnh</span>
                <span class="name">Tên sản phẩm</span>
                <span class="price">Giá</span>
                <span class="stock">Số lượng</span>
                <span class="status">Trạng thái</span>
                <span class="action">Hành động</span>
            </div>
            <div class="table-products">
                <?php
include("../config/config.php");

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
?>
                <div class="table-row">
                    <span class="id"><?php echo $row["id"]; ?></span>
                    <span class="img">
                        <img src="../uploads/<?php echo $row["img"]; ?>" width="50">
                    </span>
                    <span class="name"><?php echo $row["name"]; ?></span>
                    <span class="price"><?php echo number_format($row["price"]); ?> đ</span>
                    <span class="stock"><?php echo $row["stock"]; ?></span>
                    <span class="status">
                        <?php echo $row["stock"] > 0 ? "Còn hàng" : "Hết hàng"; ?>
                    </span>
                    <span class="action">
                        <a href="edit.php?id=<?php echo $row["id"]; ?>">Sửa</a>
                        <a href="process_delete_product.php?id=<?php echo $row["id"]; ?>">Xóa</a>
                    </span>
                </div>
                <?php
}
?>
            </div>
        </div>
    </div>
    <script src="../assets/js/main.js"></script>
</body>

</html>