<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/5/19
 * Time: 下午 03:12
 */
$a = 10;
$b = 5;
if (++$a<=10 && $b-- >=5) {
    echo 'OK $a='.$a.'$b='.$b;
}else{
    echo 'XX $a='.$a;
}



$score = rand(0, 100);
echo "score: " . $score . "<br>grade: ";
if ($score >= 90) {
    echo "A";
} elseif ($score >= 80) {
    echo "B";
} elseif ($score >= 70) {
    echo "C";
} elseif ($score >= 60) {
    echo "D";
} else {
    echo "E";
}

