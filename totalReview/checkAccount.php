<?php
include 'PDO.dsn.php';
session_start();
if (!isset($_REQUEST['account']))
    header('Location:login.php');
$account = $_REQUEST['account'];
$passwd = $_REQUEST['passwd'];
$pdo = new pdo($dsn, $user, $password, $opt);
$sql = "SELECT * FROM member WHERE account=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$account]);
if ($stmt->rowCount()>0){
    $memberObj = $stmt->fetchObject();
    if (password_verify($passwd,$memberObj->password)){
        $_SESSION['member'] = $memberObj;
        header("Location:main.html");
    }else{
        header('Location:login.html');
    }
}else{
    header('Location:login.html');
}

