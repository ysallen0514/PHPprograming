<table width="100%" border="1">
    <?php
    $start = 4;
    $col = 7;
    $line = 4;
    for ($row = 0; $row < $line; $row++) {
        echo '<tr>';
        for ($j = $start; $j < $start + $col; $j++) {
            $new_j = $j + $row * $col;
//            if (($row + $j) % 2 == 0) {
//                echo '<td bgcolor="aqua">';
//            } else {
//                echo '<td bgcolor="#ffe4c4">';
//            }
            echo "<td bgcolor=".((($row + $j) % 2 == 1)?'aqua':'#ffe4c4').">";
            for ($i = 1; $i <= 9; $i++) {
                $r = $new_j * $i;
                echo "$new_j x $i = $r<br>";
            }
            echo '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>