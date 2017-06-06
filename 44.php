<!--//brad52-->
<?php
include 'PDO.dsn.php';
session_start();
if (!isset($_GET['a'])){
    echo "F1";
    die();
}

$account = $_GET['a'];
$pdo = new pdo($dsn, $user, $password, $opt);

$sql = "SELECT account FROM member WHERE account=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$account]);
if ($stmt->rowCount()>0){
    echo "F2";
}else{
    echo "OK";
}