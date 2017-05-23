<?php
$a = [1,2,3,type =>4,5,6];
foreach($a as $value) {
    echo "$value<br>";
}
echo '<hr>';
for ($i = 0; $i< count($a); $i++) {
    echo "$i = $a[$i]<br>";
}
?>