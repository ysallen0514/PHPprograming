<?php
$poker = array();
for ($i = 0; $i < 52; $i++) {
    do {
        $temp = rand(1, 52);
        $isRepeat = false;
        for ($j = 0; $j < $i; $j++) {
            if ($poker[$j] == $temp) {
                $isRepeat = true;
                break;
            }
        }
    } while ($isRepeat);
//    $temp = rand(1, 52);
//    $isRepeat = false;
//    for ($j = 0; $j < $i; $j++) {
//        if ($poker[$j] == $temp) {
//            $isRepeat = true;
//            break;
//        }
//    }
//    if ($isRepeat) {
//        $i--;
//        continue;
//    } else {
    $poker[] = $temp;
    echo $poker[$i] . '<br>';
}