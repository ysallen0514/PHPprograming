<?php
$account = $_REQUEST['account'];
$passwd = $_REQUEST['passwd'];
$birthday = $_REQUEST['birthday'];
$area = $_REQUEST['area'];
$gender = $_REQUEST['gender'];
$interest = $_REQUEST['interest'];
echo $account.'<br>';
echo $passwd.'<br>';
echo $birthday.'<br>';
echo $area.'<br>';
echo $gender.'<br>';
foreach ($interest as $value){
    echo "$value<br>";
}
