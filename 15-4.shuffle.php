<?php
$poker = range(0, 51);
shuffle($poker);

foreach ($poker as $card) {
    echo $card . '<br>';
}
echo '<hr>';

foreach ($poker as $i => $value) {
    $player[$i % 4][(int)($i / 4)] = $value;
}
?>

<table border="1" width="100%">
    <?php
    $suits = array("<font color='black' size='3'>&spades;</font>",
        "<font color='red' size='3'>&hearts;</font>",
        "<font color='red' size='3'>&diams;</font>",
        "<font color='black' size='3'>&clubs;</font>",
    );
    $value = array('A', 2, 3, 4, 5, 6, 7, 8, 9, 10, 'J', 'Q', 'K');
    foreach ($player as $someone) {

//        echo '<tr>';
//        natsort($someone);
//        foreach ($someone as $card) {
//
//            echo "<th >{$suits[$card% 4]}{$value[(int)($card / 4)]}</th>";
//        }
//        echo '</tr>';
        echo '<tr>';
        natsort($someone);
        foreach ($someone as $card) {
            echo "<th >{$suits[$card% 4]}{$value[(int)($card / 4)]}</th>";
        }
        echo '</tr>';
    }
    ?>
</table>
