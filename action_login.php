<?php
include ("includes/header.php");

//بررسي خالي نبودن كادر متن نام كاربري و گذرواژه
	
if ((isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) &&
    !empty($_POST['password']))) {

    $username = $_POST['username']; // ذخيره نام كاربري
    $password = $_POST['password'];  // ذخيره گذرواژه
} else
    exit("برخی از فیلد ها مقدار دهی نشده است");


$link = mysqli_connect("localhost", "root", "", "shop_db"); // اتصال به  پايگاه داده shop_db

if (mysqli_connect_errno())
    exit("خطاي با شرح زير رخ داده است :" . mysqli_connect_error());

// پرس و جو بر اساس نام كاربري و گذرواژه
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($link, $query);   //اجراي پرس و جو $query

$row = mysqli_fetch_array($result);   //ذخيره اطلاعات ركورد كاربر در آرايه $row

if ($row) {
    $_SESSION["state_login"] = true;
    $_SESSION["realname"] = $row['realname'];
   
    $_SESSION["username"] = $row['username'];


    if ($row["type"] == 0)
        $_SESSION["user_type"] = "public";
        
    elseif ($row["type"] == 1) {
        $_SESSION["user_type"] = "admin";

?>

<script type="text/javascript">
<!--
location.replace("admin_products.php");	
-->
</script> 
   
<?php
    }

    echo ("<p style='color:#402B3A;text-align: center;'><b>{$row['realname']} به پاپیون استایل خوش آمديد</b></p>");
} else
    echo ("<p style='color:red;text-align: center;'><b>نام كاربري يا كلمه عبور يافت نشد</b></p>");


mysqli_close($link);   // قطع اتصال پايگاه داده

include ("includes/footer.php");
?>
