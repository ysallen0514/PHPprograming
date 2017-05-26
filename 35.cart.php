<?php
include 'Allen.api.php';
session_start();
$memberObj = new Member('A123456789');
$cartObj = new Cart($memberObj);

$_SESSION['cart'] = $cartObj;


$cartObj->addItem('a003', rand(1, 15));
$cartObj->addItem('a007', rand(1, 15));
$list = $cartObj->getList();
foreach ($list as $pid => $qty) {
    echo "{$pid}:{$qty}<br>";
}
?>
<hr>
<a href='36.session.php'>Next</a>