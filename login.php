<?php
include ("includes/header.php");
if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
    ?>
    <script type="text/javascript">

        location.replace("index.php"); // منتقل شود index.php به صفحه

    </script>
    <?php
}
?>
<link href="css/loginstyle.css" rel="stylesheet" type="text/css" />
<div class="login-container">
    <h2>ورود به حساب کاربری</h2>
    <form name="login" action="action_login.php" method="POST">
        <div class="form-group">
            <label for="username">نام کاربری: <span style="color: red;">*</span></label>
            <input type="text" id="username" name="username" required />
        </div>
        <div class="form-group">
            <label for="password">کلمه عبور: <span style="color: red;">*</span></label>
            <input type="password" id="password" name="password" required />
        </div>
        <div class="form-buttons">
            <input type="submit" value="ورود" />
            <input type="reset" value="جدید" />
        </div>
    </form>
</div>
<?php
include ("includes/footer.php");
?>
