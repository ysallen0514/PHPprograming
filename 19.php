<meta charset="UTF-8">
<?php
date_default_timezone_set("Asia/Taipei");
$dirname = '.';
if (isset($_GET['dirname'])) {
    $dirname = $_GET['dirname'];
    if (isset($_GET['filename'])){
//        $delfile = $_GET['filename'];
        unlink("{$dirname}/{$_GET['filename']}");
    }
}
$fp = @opendir($dirname) or die ('server down');
?>
<form>
    <input type="text" name="dirname">
    <input type="submit" value="chdir">
</form>
<hr>
<table border="1" width="100%">
    <tr>
        <th>FileName</th>
        <th>Type</th>
        <th>Size</th>
        <th>mTime</th>
        <th>Delete</th>
    </tr>
    <?php

    while ($file = readdir($fp)) {
        echo "<tr>";
        echo "<td>$file</td>";
        $type = '';
        if (is_dir("{$dirname}/{$file}")){
            $type = 'div';
        }elseif (is_file("{$dirname}/{$file}")) {
            $type = 'file';
        }
        echo "<td>$type</td>";
        echo "<td>".filesize("{$dirname}/{$file}")."</td>";
        echo "<td>".date('y-m-d h:i:s',filemtime("{$dirname}/{$file}"))."</td>";
        echo "<td><a href='?dirname={$dirname}&filename={$file}' onclick=\"return confirm('delete?')\">delete</a></td>";
        echo "</tr>";
    }
    ?>
</table>


