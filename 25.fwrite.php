<?php
$fp = fopen('./25-1.write.txt','w');
fwrite($fp,"HiHi,ShenXian");

fclose($fp);
$fr = fopen('./25-1.write.txt','r');
$line = fgets($fr);
echo $line;
fclose($fr);