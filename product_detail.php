<?php
include("includes/header.php");
$link = mysqli_connect("localhost", "root", "", "shop_db");
if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$pro_code = 0;
if (isset($_GET['id']))
    $pro_code = $_GET['id'];

// دریافت اطلاعات محصول
$query = "SELECT * FROM products WHERE pro_code='$pro_code'";
$result = mysqli_query($link, $query);

// دریافت نظرات محصول
$query = "SELECT * FROM comments WHERE product_id='$pro_code'";
$comments_result = mysqli_query($link, $query);
?>

<link href="css/detailstyle.css" rel="stylesheet" type="text/css" />
<head>
    <meta charset="UTF-8">
    <title>جزئیات محصول</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <table>
        <tr>
            <?php
            if ($row = mysqli_fetch_array($result)) {
                ?>
                <td style="border-style: dotted dashed; vertical-align: top;">
                    <h4><?php echo ($row['pro_name']); ?></h4>
                    <img src="images/products/<?php echo ($row['pro_image']); ?>" />
                    <br/>
                    قیمت: <?php echo ($row['pro_price']); ?> &nbsp; تومان
                    <br/>
                    تعداد موجودی: <span ><?php echo ($row['pro_qty']); ?></span>
                    <br/>
                    توضیحات: <span ><?php echo ($row['pro_detail']); ?></span>
                    <br/><br/>
                    <b><a href="order.php?id=<?php echo ($row['pro_code']); ?>">سفارش و خرید پستی</a></b>
                    <br/><br/>
                </td>
                <?php
            }
            ?>
        </tr>
    </table>

    <div class="comments">
        <h3>نظرات</h3>
        <?php while ($comment = mysqli_fetch_assoc($comments_result)): ?>
            <div class="comment">
                <p><strong><?= htmlspecialchars($comment['username']); ?>:</strong></p>
                <p><?= htmlspecialchars($comment['comment']); ?></p>
            </div>
        <?php endwhile; ?>

        <?php if (isset($_SESSION['username'])): ?>
            <form method="post" action="submit_comment.php">
                <input type="hidden" name="product_id" value="<?= $pro_code; ?>">
                <label for="comment">نظر خود را بنویسید:</label><br>
                <textarea name="comment" rows="4" required></textarea><br>
                <button type="submit">ارسال نظر</button>
            </form>
        <?php else: ?>
            <p>برای ارسال نظر <a href="login.php">وارد</a> شوید.</p>
        <?php endif; ?>
    </div>
</div>

<?php include("includes/footer.php"); ?>
</body>
</html>
