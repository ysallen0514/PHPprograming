<?php
$db = @new mysqli('127.0.0.1', 'root', 'root', 'kerpi');
if (isset($_GET['delid'])) {
    $delid = $_GET['delid'];
    $sql = "delete from member where id={$delid}";
    $db->query($sql);
}

$sql = "select * from member";
$rs = $db->query($sql);

?>

<a href="38-1.add.php">New</a>
<hr>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Account</th>
        <th>Passwd</th>
        <th>Realname</th>
        <th>Delete</th>
        <th>Edit</th>
        <?php
        $db = @new mysqli('127.0.0.1', 'root', 'root', 'kerpi');
        while ($row = $rs->fetch_object()) {
            echo "<tr>";
            echo "<td>{$row->id}</td>";
            echo "<td>{$row->account}</td>";
            echo "<td>{$row->passwd}</td>";
            echo "<td>{$row->realname}</td>";
            echo "<td><a href='?delid={$row->id}'>Del</a></td>";
            echo "<td><a href='38-2.editmember.php?editid={$row->id}'>Edit</a></td>";
            echo "</tr>";
        }
        ?>
    </tr>

</table>

