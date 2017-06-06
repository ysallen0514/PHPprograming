<?php
include '39-1.PDO.dsn.php';
session_start();
if (!isset($_SESSION['member']))  header("Location:40.login.php");
    $memberObj = $_SESSION['member']

?>
hello, <?php echo $memberObj->realname;?>
<hr>
<a href="logout.php">Logout</a>
