<?php
include '39-1.PDO.dsn.php';
session_start();
if (!isset($_GET['editid'])) header('Location:38.ID.PW.php');
$editid = $_GET['editid'];
$_SESSION['id'] = $editid;
$sql = "select * from member where id={$editid}";
$pdo = new pdo($dsn,$user,$passwd,$opt);
$rs = $pdo->query($sql);
$editObj = $rs->fetchObject();
?>
<form action="38-3.updateMenber.php">
<!--    <input type="hidden" name="id" value="--><?php //echo $editObj->id; ?><!--">-->
    <table>
        <tr>
            <th>Account</th>
            <td><input type="text" name="account" value="<?php echo $editObj->account; ?>"></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="password" value="<?php echo $editObj->passwd; ?>"></td>
        </tr>
        <tr>
            <th>Realname</th>
            <td><input type="text" name="realname" value="<?php echo $editObj->realname; ?>"></td>
        </tr>
        <tr>
            <th colspan="2"><input type="submit" value="update"><th>
        </tr>

    </table>
</form>
