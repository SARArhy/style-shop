<?php
include("includes/header.php");
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true && $_SESSION["user_type"] == "admin")) {
    ?>
    <script type="text/javascript">
        location.replace("index.php");
    </script>
    <?php
    exit();
}

$link = mysqli_connect("localhost", "root", "", "shop_db");
if (mysqli_connect_errno()) {
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>مدیریت سفارشات</title>
    <link rel="stylesheet" href="css/manage_orderstyle.css">
</head>
<body>
<div class="container">
    <br />

    <?php
    $query = "SELECT * FROM orders";
    $result = mysqli_query($link, $query);
    ?>

    <table>
        <thead>
        <tr>
            <th>كد سفارش</th>
            <th>نام خریدار</th>
            <th>نام محصول</th>
            <th>تاریخ سفارش</th>
            <th>تعداد سفارش</th>
            <th>قيمت كالا</th>
            <th>قیمت نهایی</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            $color_class = '';
            switch ($row['state']) {
                case 0:
                    $color_class = "status-barasi";
                    break;
                case 1:
                    $color_class = "status-amadehersal";
                    break;
                case 2:
                    $color_class = "status-ersalshodeh";
                    break;
                case 3:
                    $color_class = "status-laghv";
                    break;
            }
            ?>
            <tr class="<?php echo $color_class; ?>">
                <td><?php echo ($row['id']) ?></td>
                <td>
                    <?php
                    $userQuery = "SELECT * FROM users WHERE username='{$row['username']}'";
                    $userResult = mysqli_query($link, $userQuery);
                    $userRow = mysqli_fetch_array($userResult);
                    echo ($userRow['realname']);
                    ?>
                </td>
                <td>
                    <?php
                    $productQuery = "SELECT * FROM products WHERE pro_code='{$row['pro_code']}'";
                    $productResult = mysqli_query($link, $productQuery);
                    $productRow = mysqli_fetch_array($productResult);
                    echo ($productRow['pro_name']);
                    ?>
                </td>
                <td><?php echo ($row['orderdate']) ?></td>
                <td><?php echo ($row['pro_qty']) ?></td>
                <td><?php echo ($row['pro_price']) ?>&nbsp;تومان</td>
                <td><?php echo ($row['pro_qty'] * $row['pro_price']) ?>&nbsp;تومان</td>
            </tr>
            <tr>
                <td>شماره تماس</td>
                <td>آدرس</td>
                <td>کد مرسوله پستی</td>
                <td>وضعیت سفارش</td>
                <td colspan="3">ابزار مديريتي</td>
            </tr>
            <tr>
                <td><?php echo ($row['mobile']) ?></td>
                <td><?php echo ($row['address']) ?></td>
                <td><?php echo ($row['trackcode']) ?></td>
                <td class="<?php echo $color_class; ?>">
                    <?php
                    switch ($row['state']) {
                        case 0:
                            echo ("تحت بررسی");
                            break;
                        case 1:
                            echo ("آماده برای ارسال");
                            break;
                        case 2:
                            echo ("ارسال شده ");
                            break;
                        case 3:
                            echo ("سفارش لغو شده است");
                            break;
                    }
                    ?>
                </td>
                <td colspan="3" class="action-links">
                    <b><a href="action_admin_manage_order.php?id=<?php echo ($row['id']) ?>&action=BARASI">تحت بررسی</a></b><br/>
                    <b><a href="action_admin_manage_order.php?id=<?php echo ($row['id']) ?>&action=AMADEHERSAL">آماده برای ارسال</a></b><br/>
                    <b><a href="action_admin_manage_order.php?id=<?php echo ($row['id']) ?>&action=ERSALSHODEH">ارسال شده</a></b><br/><br/>
                    <b><a href="action_admin_manage_order.php?id=<?php echo ($row['id']) ?>&action=LAGHV"><span style="color: red;">سفارش لغو شده</span></a></b>
                </td>
            </tr>
            <tr bgcolor="#FFED00" style="height: 10px;">
                <td colspan="7"></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</div>
<?php include("includes/footer.php"); ?>
</body>
</html>
