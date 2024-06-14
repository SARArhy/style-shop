<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم عضویت</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php include("includes/header.php"); ?>
<?php
if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
    echo '<script type="text/javascript">location.replace("index.php");</script>';
}
?>
<script type="text/javascript">
    function check_empty() {
        var username = document.getElementById("username").value;
        if (username == '') {
            alert('وارد کردن نام کاربری الزامی است');
        } else {
            var r = confirm("از صحت اطلاعات وارد شده اطمینان دارید؟");
            if (r == true) {
                document.register.submit();
            }
        }
    }
</script>
<link href="css/registerstyle.css" rel="stylesheet" type="text/css" />
<form name="register" action="action_register.php" method="POST">
    <div class="form-group">
        <label for="realname">نام و نام خانوادگی:<span style="color: red;">*</span></label>
        <input type="text" id="realname" name="realname">
    </div>
    <div class="form-group">
        <label for="username">نام کاربری:<span style="color: red;">*</span></label>
        <input type="text" id="username" name="username">
    </div>
    <div class="form-group">
        <label for="password">کلمه عبور:<span style="color: red;">*</span></label>
        <input type="password" id="password" name="password">
    </div>
    <div class="form-group">
        <label for="repassword">تکرار کلمه عبور:<span style="color: red;">*</span></label>
        <input type="password" id="repassword" name="repassword">
    </div>
    <div class="form-group">
        <label for="email">پست الکترونیکی:<span style="color: red;">*</span></label>
        <input type="email" id="email" name="email">
    </div>
    <div class="form-buttons">
        <input type="button" value="ثبت نام" onclick="check_empty();">
        <input type="reset" value="جدید">
    </div>
</form>

<?php include("includes/footer.php"); ?>
</body>
</html>
