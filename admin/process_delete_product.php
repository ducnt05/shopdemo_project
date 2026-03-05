<?php
include("../config/config.php");
$id = $_GET["id"];
$sql = "DELETE FROM products WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    header("Location: products.php");
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>