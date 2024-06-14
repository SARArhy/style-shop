<?php
include("includes/header.php");

$link = mysqli_connect("localhost", "root", "", "shop_db");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "SELECT * FROM products";

$result = mysqli_query($link, $query);
?>
<link href="css/styleindex.css" rel="stylesheet" type="text/css" />
<div class="container">
    <div class="table-container">
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="product-box">
                <a href="product_detail.php?id=<?php echo ($row['pro_code']) ?>" style="text-decoration: none;">
                    <img src="images/products/<?php echo ($row['pro_image']) ?>" alt="<?php echo ($row['pro_name']) ?>" />
                </a>
                <h4><?php echo ($row['pro_name']) ?></h4>
                <div class="price">قيمت: <?php echo ($row['pro_price']) ?> تومان</div>
                <div class="stock">موجودی: <?php echo ($row['pro_qty']) ?></div>
                <div class="details"><?php echo (substr($row['pro_detail'], 0, 120)) ?>...</div>
                <a href="product_detail.php?id=<?php echo ($row['pro_code']) ?>" class="button">توضيحات تكميلي و خريد</a>
            </div>
            <?php
        }
        ?>
    </div>
</div>

<?php
include("includes/footer.php");
?>
