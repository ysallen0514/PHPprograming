<?php
include '39-1.PDO.dsn.php';

$pdo = new pdo($dsn,$user,$passwd,$opt);
$account = 'Allen';
$passwd = '666';
$realname = 'Yei';

$sql = "insert into member(account,passwd,realname) VALUES (?,?,?)";
//$stmt = $pdo->prepare($sql);
//$stmt->execute([$account,$passwd,$realname]);
$stmt = $pdo->prepare($sql)->execute([$account,$passwd,$realname]);