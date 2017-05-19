<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/5/19
 * Time: 下午 03:12
 */

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

