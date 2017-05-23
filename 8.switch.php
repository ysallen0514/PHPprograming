<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2017/5/22
 * Time: 上午 09:13
 */
$month = rand(1, 12);
switch ($month) {
    case 1:case 3:case 5:case 7:case 8:case 10:case 12:
        echo "month = $month, day = 31";
        break;
    case 4:case 6:case 9:case 11:
    echo "month = $month, day = 30";
    break;
        case 2:
        echo "month = $month, day = 28";
        break;
    default:
        echo 'XX';
        break;
    }