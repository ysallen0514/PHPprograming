<?php
include '17-1.bradapi.php';
$r = createLottery();

foreach ($r as $lottery) {
    echo $lottery.'<br>';
}