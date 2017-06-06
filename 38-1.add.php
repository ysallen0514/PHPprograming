<?php
if (isset($_GET['account'])){
    $account = $_GET['account'];
    $password = password_hash($_GET['password'],PASSWORD_DEFAULT);
    $realname = $_GET['realname'];
    $sql = "insert into member (account,passwd,realname) " .
        "values ('{$account}','{$password}','{$realname}')";
    $db = @new mysqli('127.0.0.1','root','root','kerpi');
    $db->query($sql);
    header('Location:38.ID.PW.php');
}

?>
<form>
    <table>
        <tr>
            <th>Account</th>
            <td><input type="text" name="account"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <th>Realname</th>
            <td><input type="text" name="realname"></td>
        </tr>
        <tr>
            <th colspan="2"><input type="submit" value="add"><th>
        </tr>
    </table>
</form>

