<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="top-bar">
            <div class="top-left">
                <p>Hotline: 0974662414</p>
                <p>Email: nduc82157@gmail.com</p>
            </div>
            <div class="top-right">
                <a href="login.php">Đăng nhập</a>
                <a href="register.php">Đăng ký</a>
                <a href="#">Liên hệ</a>
            </div>
        </div>
        <div class="header">
            <h1 class="firt-name">YOUR</h1>
            <h1 class="last-name">SHOP</h1>
        </div>
        <div class="navbar">
            <div class="navbar-left">
                <a href="../index.php">TRANG CHỦ</a>
                <a href="#">GIỚI THIỆU</a>
                <a href="#">SẢN PHẨM<i class="fa-solid fa-chevron-down"></i></a>
                <a href="#">LIÊN HỆ</a>
                <a href="#">TIN TỨC</a>

            </div>
            <div class="navbar-right">
                <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </div>
        <div class="page-header">
            <a href="../index.php" class="breadcrumb-home">Trang chủ</a>
            <i>></i>
            <a href="#" class="breadcrumb-current">Đăng nhập tài khoản</a>
        </div>
        <div class="auth-section">
            <div class="auth-container">
                <h2>Đăng nhập</h2>
                <p>Nếu chưa có tài khoản,<a href="register.php">đăng kí tại đây</a></p>
                <form action="process_login.php" method="post" class="auth-form">
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="password" name="password" placeholder="Mật khẩu" required>
                    <button type="submit">Đăng nhập</button>
                </form>
                <a href="#">Quên mật khẩu</a>
                <p>Hoặc đăng nhập bằng</p>
                <div class="fb-gg">
                    <a href=""><img src="https://bizweb.dktcdn.net/assets/admin/images/login/fb-btn.svg" alt=""></a>
                    <a href=""><img src="https://bizweb.dktcdn.net/assets/admin/images/login/gp-btn.svg" alt=""></a>
                </div>
            </div>
        </div>

    </div>
</body>

</html>