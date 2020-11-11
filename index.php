<?php
session_start();
?>
<html>
<head>
    <title>Trang đăng nhập</title>
    <meta charset="utf-8">
</head>
<body>
<form method="post">
    <fieldset>
        <legend>Đăng nhập</legend>
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username" size="30"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" size="30"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <input type="submit" name="btn_submit" value="Đăng nhập"></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr = [["admin", "1234"], ["tuan", "1234"]];
    if (!empty($_POST["btn_submit"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        foreach($arr as $value) {
            if ($username == $value[0] && $password == $value[1] ){
                header("Location: list.php");
                break;
//            }elseif ($username == $arr[1][0] && $password == $arr[1][1]){
//                echo  'hello';
//                break;

            }
            }
    }
}
