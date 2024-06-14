<?php
session_start();
$link = mysqli_connect("localhost", "root", "", "shop_db");
if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

if (isset($_SESSION['username']) && isset($_POST['comment']) && isset($_POST['product_id'])) {
    $username = $_SESSION['username'];
    $comment = $_POST['comment'];
    $product_id = $_POST['product_id'];

    // استفاده از Prepared Statements برای جلوگیری از SQL Injection
    $stmt = $link->prepare("INSERT INTO comments (product_id, username, comment) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $product_id, $username, $comment);
    $stmt->execute();
    $stmt->close();
}

header("Location: product_detail.php?id=$product_id");
exit();
?>