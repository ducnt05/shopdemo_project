<?php
include("../config/config.php");
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$sql_check = "SELECT * FROM users WHERE email='$email'";
$result_check = mysqli_query($conn, $sql_check);
if (mysqli_num_rows($result_check) > 0) {
    echo "Email đã tồn tại";
    exit();
}
$sql = "INSERT INTO users (firstname,lastname,email,phone,password)
VALUE ('$firstname','$lastname','$email','$phone','$hashed_password')";
if (mysqli_query($conn, $sql)) {
    echo "Đăng kí thành công";
}
?>