<?php
$json = file_get_contents("http://www.railway.gov.tw/Upload/UserFiles/%E8%BB%8A%E7%AB%99%E5%9F%BA%E6%9C%AC%E8%B3%87%E6%96%992.json");
$result = mb_convert_encoding($json,'utf-8','big-5');
include 'PDO.dsn.php';
$jData =json_decode($result);
//var_dump($root);
foreach ($jData as $Data){
    foreach ($Data as $k=>$v){
        echo "{$k}:{$v}<br>";
    }
    echo '<hr>';
}