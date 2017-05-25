<?php
$imgSrc = imagecreatefromjpeg('./upload/h600.jpg');
$imgDst = imagecreate(300, 300);
$imgSW = imagesx($imgSrc);
$imgSH = imagesy($imgSrc);


if ($imgSW > $imgSH) {
    $imgDW = imagesx($imgDst);
    $imgDH = $imgSH * 400 / $imgSW;
} else {
    $imgDH = imagesx($imgDst);
    $imgDW = $imgSW * 400 / $imgSH;
}

imagecopyresized($imgDst, $imgSrc,
    0, 0,
    0, 0,
    $imgDW, $imgDH,
    $imgSW, $imgSH);


header('Content-Type: image/jpeg');
imagejpeg($imgDst);

imagedestroy($imgDst);
imagedestroy($imgSrc);
