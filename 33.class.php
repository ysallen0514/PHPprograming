<?php
include 'Allen.api.php';

$Mybike = new bike;
$Yrbike = new bike;
$Mybike ->speedUp();$Mybike ->speedUp();$Mybike ->speedUp();$Mybike ->speedUp();
$Yrbike ->SpeedUp();$Yrbike ->SpeedUp();$Yrbike ->SpeedDown();
echo "{$Mybike -> getSpeed()}:{$Yrbike -> getSpeed()}<br>";

$Myscooter = new scooter;
$Myscooter ->SpeedUp();
echo "{$Myscooter -> getSpeed()}";

