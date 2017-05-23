<?php

$a[1] = 5;
echo gettype($a) . '<br>';
var_dump($a);
echo '<br>' . count($a);
?>
    <hr>
<?php

$a[1] = 123;
$a[] = 12.3;
$a[] = true;
$a[] = 'apple';
var_dump($a);
echo '<br>' . count($a);
?>
    <hr>
<?php
$var[key] = value;
$allen[age] = 26;
$allen[weight] = 67;
$allen[gender] = true;
$allen[name] = 'allen';
var_dump($allen);
echo '<br>' . count($allen);
?>
    <hr>
<?php
$a = array(1, 2, 3, false, 'allen');
var_dump($a);
echo '<br>' . count($a);
?>
    <hr>
<?php
$a = array(1, 2, 3, name => 'allen', 8 => 100);
var_dump($a);
echo '<br>' . count($a);
?>
    <hr>
<?php
//$p1 = $p2 = $p3 = $p4 = $p5 = $p6 = 0;
$p = array(0,0,0,0,0,0);
for ($i = 0; $i < 100000; $i++) {
//    $random = rand(1, 6);
    $temp = rand(1,9);
    $p[$temp >=7?$temp-3:$temp]++;
//    switch ($random) {
//        case 1: $p1++; break;
//        case 2: $p2++; break;
//        case 3: $p3++; break;
//        case 4: $p4++; break;
//        case 5: $p5++; break;
//        case 6: $p6++; break;
//    }
}
for ($i = 1; $i < count($p); $i++) {
echo "point $i = $p[$i] <br>";
}

