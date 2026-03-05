<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style_customers.css">
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
        <div class="customer-header">
            <h2>Quản lý Khách hàng</h2>
            <div class="customer-table">
                <div class="table-head">
                    <span class="id">ID</span>
                    <span class="lastname">Họ</span>
                    <span class="firstname">Tên</span>
                    <span class="email">Email</span>
                    <span class="phone">Số điện thoại</span>
                </div>
                <div class=" table-row">
                    <?php
include("../config/config.php");
$sql = "SELECT * FROM users where role = 'user'";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
    ?>
                    <span class="id"><?php echo $row["id"]; ?></span>
                    <span class="lastname"><?php echo $row["lastname"]; ?></span>
                    <span class="firstname"><?php echo $row["firstname"]; ?></span>
                    <span class="email"><?php echo $row["email"]; ?></span>
                    <span class="phone"><?php echo $row["phone"]; ?></span>
                    <?php
 } ?>
                </div>
            </div>
        </div>

    </div>
</body>

</html>