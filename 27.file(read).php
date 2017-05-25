<?php
$fp = file('24-1.txt');
foreach ($fp as $line){
    $flen = strlen($line);
    echo "$flen ==> {$line} <br>";
}
$fs = file_get_contents('./24-1.txt');
echo "$fs<br>";