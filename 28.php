<?php
$line = file('Book1.csv')

?>
<table border=""width="25%">
    <tr>
        <th>name</th>
        <th>phone</th>
        <th>age</th>
        <th>height</th>
        <th>weight</th>
        <?php
        foreach ($line as $value){
            $fields = explode(',',$value);
            echo '<tr>';
            foreach ($fields as $field){
                echo "<td style='float : center'>{$field}</td>";
            }
            echo '</tr>';
        }
        ?>
    </tr>
</table>
