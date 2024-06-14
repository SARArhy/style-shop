<?php
include("includes/header.php");
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)) {
    ?>
    <script type="text/javascript">
        <!--
        location.replace("index.php");
        -->
    </script>
    <?php
} // if پایان

$link = mysqli_connect("localhost", "root", "", "shop_db");

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

$query = "SELECT * FROM users WHERE username='{$_SESSION['username']}'";
$result = mysqli_query($link, $query);
if ($row = mysqli_fetch_array($result)) {
    $realname = $row['realname'];
    $email = $row['email'];
}
?>

<style>


    .content {
        color: #402B3A;
        font-family: 'B Nazanin', Tahoma, sans-serif;
        font-size: 30px;
        text-align: center;
        padding: 20px;
        align-items: center;
        justify-content: center;

    }


</style>

<div class="content">
    پاپیون استایل با ۱۰ سال تجربه در زمینه فروش عمده دو تکی پوشاک دخترانه به عنوان واحد برتر این صنف معرفی شده.
    <br>
    بزرگترین فروشگاه اینترنتی پوشاک دخترانه. تخصص ما عرضه انواع پوشاک ایرانی با کفیت است. فروش فقط از طریق سایت.
    <br>
    با تنوعی بی نظیر از محصولات و مناسب انواع سلیقه ها.
</div>

<?php
include("includes/footer.php");
?>
