<?php
$poker = array();
//for ($i = 0; $i < 52; $i++) $check[] = false;
for ($i = 0; $i <= 5; $i++) {
    $poker[$i] = $i;
    //    echo $temp;
    for ($j = 5; $j >= 0; $j--) {
        $temp = rand(0, 5);
        $poker[$j] = $temp;
        $poker[$temp]=$j;



    }
    echo $poker[$i]. '<br>';

}