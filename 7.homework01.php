<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/5/19
 * Time: 下午 04:09
 */
$x = mt_rand();
//$x = 300;
echo "請問西元 $x 年是不是閏年?<br>answer:";


if ($x % 400== 0 xor $x % 100 == 0 xor $x % 4== 0) {
    echo '是閏年';
}else{
    echo '不是閏年';
}


//if ($x % 400 == 0) {
//    echo '是閏年';
//} elseif ($x % 100 == 0) {
//    echo '不是閏年';
//} elseif ($x % 4 == 0) {
//    echo '是閏年';
//}else{
//    echo '不是閏年';
//}