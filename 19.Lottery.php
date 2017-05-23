<?php
include '18.bradapi.php';
$r = createLottery();

foreach ($r as $lottery) {
    echo $lottery.'<br>';
}