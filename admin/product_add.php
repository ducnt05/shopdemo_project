<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style_product_add.css">
</head>

<body>
    <div class="container">
        <h1>Thêm sản phẩm mới</h1>
        <form action="../auth/process_product_add.php" method="post" enctype="multipart/form-data">
            <div class="form-top">
                <label for="name">Tên sản phẩm:</label>
                <input type="text" name="name" placeholder="Nhập tên sản phẩm">
                <label for="description">Mô tả sản phẩm:</label>
                <input type="text" name="description" placeholder="Nhập mô tả sản phẩm">
                <label for="price">Giá sản phẩm:</label>
                <input type="number" name="price" placeholder="Nhập giá sản phẩm">
                <label for="stock">Số lượng:</label>
                <input type="number" name="stock" placeholder="Nhập số lượng">
            </div>
            <div class="form-bottom">
                <label for="image">Hình ảnh sản phẩm:</label>
                <input type="file" name="image" placeholder="Hình ảnh sản phẩm">
                <button type="submit">Thêm sản phẩm</button>
            </div>
        </form>

    </div>
</body>

</html>