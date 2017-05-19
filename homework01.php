<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/5/19
 * Time: 下午 04:09
 */
//$x = rand(0,10000);
$x = 3000;
echo $x."<br>";


if ($x % 400 == 0) {
    echo '是閏年';
} elseif ($x % 100 == 0) {
    echo '不是閏年';
} elseif ($x % 4 == 0) {
    echo '是閏年';
}else{
    echo '不是閏年';
}