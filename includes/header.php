<?php
session_start();
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8" />
    <title>پاپیون استایل</title>

    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="../images/b.png">
</head>

<body>

<div class="container">
    <header class="header">
        <div class="logo">

            <span>پاپیون استایل</span>

        </div>
    </header>
    <nav class="nav">
        <ul class="menu">
            <li class="menu-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
            <li class="menu-item"><a href="register.php">عضویت</a></li>
            <?php
            if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
                ?>
                <li class="menu-item"><a href="logout.php">خروج <?php echo(" ({$_SESSION['realname']}) ") ?></a></li>
                <?php
            } else {
                ?>
                <li class="menu-item"><a href="login.php">ورود</a></li>
                <?php
            }
            ?>
            <li class="menu-item"><a href="about.php">درباره ما</a></li>
            <li class="menu-item"><a href="contact.php">ارتباط با ما</a></li>
            <?php
            if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["user_type"] == "admin") {
                ?>
                <li class="menu-item"><a href="admin_products.php">مدیریت محصولات</a></li>
                <li class="menu-item"><a href="admin_manage_order.php">مدیریت سفارشات</a></li>
                <?php
            }
            ?>
        </ul>
    </nav>

</div>

</body>
</html>
