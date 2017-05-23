<?php

$v = f(4);
echo $v.'<br>';

sayYa('Allen');
sayYa('ShenXian' ,'Hello');
sayYa('DOGJJ', 'Oh My God');
echo '<hr>';

sayHello('DOGJJ','ShenXian','Allen');
function f($x){
    $r = $x*2+1;
    return $r;
}

function sayYa($who, $pre = 'Hi'){
    echo "$pre! {$who}<br>";
}

function sayHello() {
//    echo func_num_args();
//    echo func_get_arg(0);
//    $say = func_get_args();
//    echo $say.'<br>';
}


