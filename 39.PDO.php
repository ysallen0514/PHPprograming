<?php
include '39-1.PDO.dsn.php';

$pdo = new pdo($dsn,$user,$passwd,$opt);
$sql = "select * from member";
$rs = $pdo->query($sql);


while ($row = $rs ->fetchObject()){
    echo "{$row->id}:{$row->account}<br>";
}