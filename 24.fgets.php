<?php
$fp = fopen('./24-1.txt','r');
while ($line = fgets($fp)){
    $len = strlen($line);
    echo "{$len}:{$line}<br>";
}
fclose($fp);