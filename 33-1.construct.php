<?php
include 'Allen.api.php';
if (TWID::checkId("A123456789") == 1){
    $myId = new TWID("A123456789");
    $myId = new TWID("A123456789");
    $myId = new TWID("A123456789");
    $myId = new TWID("A123456789");
    $myId = new TWID("A123456781");
    echo $myId -> getGender()?'Male':'Female';
    echo '<br>';
    echo TWID::$counter;
}else{
    echo 'XX';
}