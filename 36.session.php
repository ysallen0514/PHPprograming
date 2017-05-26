<?php
include 'Allen.api.php';
session_start();

if(!isset($_SESSION['cart']))
    header('Location:35.cart.php');

$cartObj = $_SESSION['cart'];
echo 'Page 2<hr>';


$list = $cartObj->getList();
foreach ($list as $pid => $qty) {
    echo "{$pid}:{$qty}<br>";
}
?>
<hr>
<a href="logout.php">Logout</a>
