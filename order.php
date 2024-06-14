<?php
include("includes/header.php");

$link = mysqli_connect("localhost", "root", "", "shop_db");
if (mysqli_connect_errno())
    exit("خطای با شرح زیر رخ داده است :" . mysqli_connect_error());

$pro_code = 0;
if (isset($_GET['id']))
    $pro_code = $_GET['id'];

if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)) {
    echo "<br /><span style='color:red;'><b>برای خرید پستی محصول انتخاب شده باید وارد سایت شوید</b></span><br/><br/>";
    echo "درصورتی که عضو فروشگاه هستید برای ورود <a href='login.php' style='text-decoration: none;'><span style='color:blue;'><b>اینجا</b></span></a> کلیک کنید<br/>";
    echo "و در صورتی که عضو نیستید برای ثبت نام در سایت <a href='register.php' style='text-decoration: none;'><span style='color:green;;'><b>اینجا</b></span></a> کلیک کنید<br /><br />";
    include("includes/footer.php");
    exit();
}

$query = "SELECT * FROM products WHERE pro_code='$pro_code'";
$result = mysqli_query($link, $query);

if ($row = mysqli_fetch_array($result)) {
$query = "SELECT * FROM users WHERE username='{$_SESSION['username']}'";
$result = mysqli_query($link, $query);
$user_row = mysqli_fetch_array($result);
?>


<head>

    <title>ثبت سفارش</title>
    <link href="css/orderstyle.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">

        function calc_price() {
            var pro_qty = <?php echo ($row['pro_qty']); ?>;
            var price = document.getElementById('pro_price').value;
            var count = document.getElementById('pro_qty').value;
            var total_price;

            if (count > pro_qty) {
                alert('تعداد موجودی انبار کمتر از درخواست شما است!!');
                document.getElementById('pro_qty').value = 0;
                count = 0;
            }

            if (count == 0 || count == '')
                total_price = 0;
            else
                total_price = count * price;

            document.getElementById('total_price').value = total_price;
        }

        function check_input() {
            var r = confirm("از صحت اطلاعات وارد شده اطمینان دارید؟");
            if (r == true) {
                var validation = true;
                var count = document.getElementById('pro_qty').value;
                var mobile = document.getElementById('mobile').value;
                var address = document.getElementById('address').value;

                if (count == 0 || count == '')
                    validation = false;

                if (mobile.length < 11)
                    validation = false;

                if (address.length < 15)
                    validation = false;

                if (validation)
                    document.order.submit();
                else
                    alert('برخی از ورودی های فرم سفارش محصول به درستی پر نشده‌اند');
            }
        }
    </script>
</head>
<body>


    <form name="order" action="action_order.php" method="POST">
        <table class="table-container" border="0">
            <tr>
                <td>کد کالا: <span style="color: red;">*</span></td>
                <td><input type="text" id="pro_code" name="pro_code" value="<?php echo ($pro_code); ?>" readonly /></td>
            </tr>
            <tr>
                <td>نام کالا: <span style="color: red;">*</span></td>
                <td><input type="text" id="pro_name" name="pro_name" value="<?php echo ($row['pro_name']); ?>" readonly /></td>
            </tr>
            <tr>
                <td>تعداد درخواستی: <span style="color: red;">*</span></td>
                <td><input type="text" id="pro_qty" name="pro_qty" onchange="calc_price();" /></td>
            </tr>
            <tr>
                <td>قیمت واحد کالا: <span style="color: red;">*</span></td>
                <td><input type="text" id="pro_price" name="pro_price" value="<?php echo ($row['pro_price']); ?>" readonly /> تومان</td>
            </tr>
            <tr>
                <td>مبلغ قابل پرداخت: <span style="color: red;">*</span></td>
                <td><input type="text" id="total_price" name="total_price" value="0" readonly /> تومان</td>
            </tr>
            <tr>
                <td>نام خریدار: <span style="color: red;">*</span></td>
                <td><input type="text" id="realname" name="realname" value="<?php echo ($user_row['realname']); ?>" readonly /></td>
            </tr>
            <tr>
                <td>پست الکترونیکی: <span style="color: red;">*</span></td>
                <td><input type="text" id="email" name="email" value="<?php echo ($user_row['email']); ?>" readonly /></td>
            </tr>
            <tr>
                <td>شماره تلفن همراه: <span style="color: red;">*</span></td>
                <td><input type="text" id="mobile" name="mobile" value="09" /></td>
            </tr>
            <tr>
                <td>آدرس دقیق پستی جهت دریافت محصول: <span style="color: red;">*</span></td>
                <td><textarea id="address" name="address" cols="30" rows="3" wrap="virtual"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td class="form-buttons">
                    <input type="button" value="خرید محصول" onclick="check_input();" />
                </td>
            </tr>
        </table>
    </form>

    <div class="product-info">
        <h4><?php echo ($row['pro_name']); ?></h4>
        <img src="images/products/<?php echo ($row['pro_image']); ?>" alt="Product Image" />
        <br />
        <span>قیمت واحد: <?php echo ($row['pro_price']); ?> تومان</span>
        <span>مقدار موجودی: <span class="price"><?php echo ($row['pro_qty']); ?></span></span>
        <span>توضیحات: <span class="description"><?php echo (substr($row['pro_detail'], 0, (int)(strlen($row['pro_detail']) / 4))); ?>...</span></span>
    </div>

    <?php
} // if
include("includes/footer.php");
?>
</body>
</html>
