<?php
include '39-1.PDO.dsn.php';
if (isset($_GET['account'])){
    $account = $_GET['account'];
    $password = $_GET['password'];
    $realname = $_GET['realname'];
    $sql = 'insert into (account,passwd,realname) VALUES  ("{$account}","{$password}","{$realname}")';
    $pdo = new pdo($dsn,$user,$passwd,$opt);
    $pdo->query($sql);
    header('Location:38.Homework.php');

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
