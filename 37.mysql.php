<?php
//$conn = @mysqli_connect('127.0.0.1','root','root','kerpi') or die('server busy');
//if ($conn) echo 'OK';
$db = @new mysqli('127.0.0.1','root','root','kerpi');
//echo 'OK';
echo $db -> error;
//('127.0.0.1','Yue861018','123456','Yue Jia')
//$sql = 'insert into member (account,passwd,realname) VALUES ("Yue861018","123456","Yue Jia")';
//$result = $db->query($sql);
//echo $db ->error;

$sql = 'select * from member';
$result = $db->query($sql);
echo var_dump($result);