<?php

$x = 0;
$y = 0;

$gd = imagecreatetruecolor(200, 200);

$corners[0] = array('x' => 100, 'y' =>  10);
$corners[1] = array('x' =>   0, 'y' => 190);
$corners[2] = array('x' => 200, 'y' => 190);


//$color = imagecolorallocate($gd, rand(0,255), rand(0,255), rand(0,255));

for ($i = 0; $i < 10000; $i++) {
    $color = imagecolorallocate($gd, rand(0,255), rand(0,255), rand(0,255));
    imagesetpixel($gd, round($x),round($y), $color);
    $a = rand(0, 2);
    $x = ($x + $corners[$a]['x']) / 2;
    $y = ($y + $corners[$a]['y']) / 2;

}


header('Content-Type: image/png');
imagepng($gd);

?>