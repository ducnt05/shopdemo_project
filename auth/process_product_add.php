<?php
include("../config/config.php");
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$stock = $_POST['stock'];
$img_name = $_FILES['image']['name'];
$img_tmp = $_FILES['image']['tmp_name'];
$new_img_name = time() . "_" . $img_name;
$upload_path = "../uploads/" . $new_img_name;
move_uploaded_file($img_tmp, $upload_path);
$sql = "INSERT INTO products (name, description, price, stock, img) VALUES ('$name', '$description', '$price', '$stock', '$new_img_name')";
if (mysqli_query($conn, $sql)) {
    header("Location: ../admin/products.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>