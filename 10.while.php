<?php
$sum = 0; $i = 1;$n = 99;
while($i <=$n) {
    $sum += $i++;
}
echo "1 + 2 + 3 +...+ $n = $sum";
?>

<hr>
<!--1,1,2,3,5,8-->
<!--i1,i2,i1+i2(sum),i1+i2+i2(sum+i2),i1+i2+i2+i1+i2(sum+i1+i2),sum+i1+i2*2,-->
<!--10,01,11,12,23,35,58-->
<?php
$i = 1;
$i1 = 0;
$i2 = 1;
$n = 50;

while($i <= $n) {
    $sum = $i1+$i2;
    $i1 = $i2;
    $i2 = $sum;
    $i++;
    echo $sum.' ';
}


?>