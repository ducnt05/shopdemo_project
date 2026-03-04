<?php
session_start();
include("../config/config.php");
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) == 1) {
    $user = mysqli_fetch_assoc($result);
    if (password_verify($password, $user["password"])) {
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["user_name"] = $user["firstname"] . " " . $user["lastname"];
        header("Location: ../pages/index.php");
        if ($user["role"] == "admin") {
            header("Location: ../admin/dashboard.php");
        } else {
            header("Location: ../pages/index.php");
        }
    } else {
        echo "Mật khẩu không đúng";
    }
} else {
    echo "Email không tồn tại";
}
?>