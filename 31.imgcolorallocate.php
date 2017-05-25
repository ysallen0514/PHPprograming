<?php
$img = imagecreatefromjpeg('./upload/pikachu.jpg');

$blue = imagecolorallocate ( $img, 20, 100, 240);
imagettftext ( $img,36,100,100,300,$blue,'./fonts/pen_bodyW2.ttf','Hello,World');

header('Content-Type: image/jpeg');
imagejpeg($img);

imagedestroy($img);