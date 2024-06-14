<?php
include ("includes/header.php");
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)) {
?>
<script type="text/javascript">
<!--
location.replace("index.php");
-->
</script>
<?php
}

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
<link href="css/contactstyle.css" rel="stylesheet" type="text/css" />
  <br />
<form name="contact" action="action_contact.php" method="POST">
    <table class="table-container" border="0">
        <tr>
            <td>نام و نام خانوادگی: <span style="color: red;">*</span></td>
            <td><input type="text" id="realname" name="realname" value="<?php echo $realname; ?>" /></td>
        </tr>
        <tr>
            <td> پست الکترونیک: <span style="color: red;">*</span></td>
            <td><input type="text" id="email" name="email" value="<?php echo $email; ?>" /></td>
        </tr>
        <tr>
            <td>متن پیام: <span style="color: red;">*</span></td>
            <td><textarea id="detail" name="detail" cols="45" rows="10" wrap="virtual"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td class="form-buttons">
                <input type="submit" value="ارسال" />
                <input type="reset" value="جدید" />
            </td>
        </tr>
    </table>
</form>




<?php
include ("includes/footer.php");
?>
   
