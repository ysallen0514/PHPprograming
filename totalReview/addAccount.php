<?php
include 'PDO.dsn.php';
if (!isset($_REQUEST['account']))
    header('Location:newAccount.php');
$account = $_REQUEST['account'];
$passwd = password_hash($_REQUEST['passwd'],PASSWORD_DEFAULT);
$rlname = $_REQUEST['rlname'];
$pdo = new pdo($dsn, $user, $password, $opt);
$sql = "INSERT INTO member (account,password,rlname) VALUES  (?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$account,$passwd,$rlname]);
header('Location:login.html');