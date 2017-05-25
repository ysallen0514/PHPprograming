<?php

class bike{
    private $speed;
    function speedUp(){
        $this -> speed = ($this -> speed<1)?1:$this -> speed*1.2;
    }
    function speedDown(){
        $this -> speed = ($this -> speed<1)?0:$this ->speed*0.7;
    }
    function getSpeed(){
        return $this ->speed;
    }
}

$Mybike = new bike;
$Yrbike = new bike;
$Mybike ->speedUp();$Mybike ->speedUp();$Mybike ->speedUp();$Mybike ->speedUp();
$Yrbike ->SpeedUp();$Yrbike ->SpeedUp();$Yrbike ->SpeedDown();
echo "{$Mybike -> getSpeed()}:{$Yrbike -> getSpeed()}";