<?php
if (!isset($_GET['rate'])) exit(0);
$rate = $_GET['rate'];

$paint = imagecreate(700,40);

$red = imagecolorallocate ( $paint, 255, 0, 0);
$yellow = imagecolorallocate ( $paint, 255, 255, 0);
imagefilledrectangle ( $paint,0,0, 700,40, $yellow );
imagefilledrectangle ( $paint,0,0, (int)($rate*700/100),40, $red );


header('Content-Type: image/jpeg');
imagejpeg($paint);

imagedestroy($paint);