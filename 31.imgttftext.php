<?php
$upload = $_FILES['upload'];

$img = imagecreatefromjpeg($upload['tmp_name']);
//$r = rand(-30,30);
$imgW = imagesx($img);
$imgH = imagesy($img);
$angle = sqrt($imgH/$imgW)*45;
$y = $imgH*0.9;
$size = sqrt($imgW*$imgH/1000);

$blue = imagecolorallocate ( $img, 0, 40, 200);
imagettftext ( $img,$size,$angle,20,$y,$blue,'./fonts/pen_bodyW2.ttf','Hello,World');

header('Content-Type: image/jpeg');
imagejpeg($img);

imagedestroy($img);