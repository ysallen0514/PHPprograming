<?php
include '41-1.PDO.dsn.php';
$pdo = new pdo($dsn, $user, $passwd, $opt);
$sql = "insert into casfood(No,Itemname,addr,tel,fex) VALUES (?,?,?,?,?)";

$json = file_get_contents("http://data.coa.gov.tw/Service/OpenData/CASdata.aspx");

$root = json_decode($json);

foreach ($root as $row) {
    $No = $row->ProductNo;
    $cname = $row->ProductName;
    $addr = $row->CompanyAddr;
    $tel = $row->CompanyTel;
    $fex = $row->CompanyFax;
    $stmt = $pdo->prepare($sql)->execute([$No,$cname,$addr,$tel,$fex]);
}

