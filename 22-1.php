<?php
$upload = $_FILES['upload'];
var_dump($upload);
foreach ($upload['error'] as $index => $error) {
    if ($upload['error'] == 0) {
        copy($upload['tmp_name'][$index], "./upload/{$upload['name'][$index]}");
    }
}123